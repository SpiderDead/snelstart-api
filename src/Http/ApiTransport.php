<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Http;

use DateTimeInterface;
use InvalidArgumentException;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use RuntimeException;
use SpiderDead\SnelStartApi\Auth\AuthMode;
use SpiderDead\SnelStartApi\Config\ClientConfig;
use SpiderDead\SnelStartApi\Exception\ApiException;
use SpiderDead\SnelStartApi\Exception\BadRequestException;
use SpiderDead\SnelStartApi\Exception\ConflictException;
use SpiderDead\SnelStartApi\Exception\ForbiddenException;
use SpiderDead\SnelStartApi\Exception\NotFoundException;
use SpiderDead\SnelStartApi\Exception\RateLimitedException;
use SpiderDead\SnelStartApi\Exception\ServerErrorException;
use SpiderDead\SnelStartApi\Exception\ServiceUnavailableException;
use SpiderDead\SnelStartApi\Exception\UnauthorizedException;
use SpiderDead\SnelStartApi\Exception\UnexpectedStatusException;
use SpiderDead\SnelStartApi\Exception\UnprocessableEntityException;
use SpiderDead\SnelStartApi\Generated\OperationMap;

final class ApiTransport
{
    public function __construct(
        private readonly ClientInterface $httpClient,
        private readonly RequestFactoryInterface $requestFactory,
        private readonly StreamFactoryInterface $streamFactory,
        private readonly ClientConfig $config,
        private readonly JsonCodec $codec
    ) {
    }

    /**
     * @param array<string, mixed> $pathParams
     * @param array<string, mixed> $queryParams
     * @throws ApiException
     */
    public function execute(string $operationId, array $pathParams = [], array $queryParams = [], mixed $body = null): mixed
    {
        $operation = OperationMap::get($operationId);
        $uri = $this->buildUri($operation['path'], $pathParams, $queryParams);

        $request = $this->requestFactory
            ->createRequest($operation['method'], $uri)
            ->withHeader('Accept', 'application/json')
            ->withHeader('User-Agent', $this->config->userAgent);

        if ($this->config->authMode === AuthMode::Header) {
            $request = $request->withHeader('Ocp-Apim-Subscription-Key', $this->config->apiKey);
        }

        if ($body !== null) {
            $payload = $this->codec->encode($body);
            $request = $request
                ->withHeader('Content-Type', 'application/json')
                ->withBody($this->streamFactory->createStream($payload));
        }

        $response = $this->httpClient->sendRequest($request);
        $statusCode = $response->getStatusCode();
        $payload = (string) $response->getBody();

        if ($statusCode >= 200 && $statusCode < 300) {
            return $this->decodeSuccess($operation['response_kind'], $operation['response_type'], $statusCode, $payload);
        }

        $message = sprintf(
            'SnelStart request failed: %s %s returned HTTP %d',
            $operation['method'],
            $operation['path'],
            $statusCode
        );

        throw $this->mapError($message, $statusCode, $payload, $response->getHeaders(), $operationId);
    }

    /**
     * @param array<string, mixed> $pathParams
     * @param array<string, mixed> $queryParams
     */
    private function buildUri(string $path, array $pathParams, array $queryParams): string
    {
        $resolvedPath = preg_replace_callback(
            '/\{([^}]+)}/',
            static function (array $matches) use ($pathParams): string {
                $name = $matches[1];
                if (!array_key_exists($name, $pathParams)) {
                    throw new InvalidArgumentException(sprintf('Missing path parameter: %s', $name));
                }

                return rawurlencode((string) $pathParams[$name]);
            },
            $path
        );

        if (!is_string($resolvedPath)) {
            throw new RuntimeException('Failed to build request path.');
        }

        if ($this->config->authMode === AuthMode::Query && !array_key_exists('subscription-key', $queryParams)) {
            $queryParams['subscription-key'] = $this->config->apiKey;
        }

        $query = $this->buildQuery($queryParams);
        $uri = $this->config->baseUri . $resolvedPath;
        if ($query !== '') {
            $uri .= '?' . $query;
        }

        return $uri;
    }

    /**
     * @param array<string, mixed> $queryParams
     */
    private function buildQuery(array $queryParams): string
    {
        $pairs = [];
        foreach ($queryParams as $key => $value) {
            if ($value === null) {
                continue;
            }

            if (is_array($value)) {
                foreach ($value as $item) {
                    $pairs[] = rawurlencode((string) $key) . '=' . rawurlencode($this->queryScalar($item));
                }
                continue;
            }

            $pairs[] = rawurlencode((string) $key) . '=' . rawurlencode($this->queryScalar($value));
        }

        return implode('&', $pairs);
    }

    private function queryScalar(mixed $value): string
    {
        if ($value instanceof DateTimeInterface) {
            return $value->format(DATE_ATOM);
        }

        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        return (string) $value;
    }

    private function decodeSuccess(string $kind, string $type, int $statusCode, string $payload): mixed
    {
        if ($statusCode === 204 || $kind === 'none' || $payload === '') {
            return null;
        }

        if ($kind === 'class' || $kind === 'array') {
            return $this->codec->decode($payload, $type);
        }

        $decoded = json_decode($payload, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $payload;
        }

        if ($kind === 'primitive') {
            return match ($type) {
                'int' => (int) $decoded,
                'float' => (float) $decoded,
                'bool' => (bool) $decoded,
                'string' => (string) $decoded,
                default => $decoded,
            };
        }

        return $decoded;
    }

    /**
     * @param array<string, array<int, string>> $headers
     */
    private function mapError(string $message, int $statusCode, string $payload, array $headers, string $operationId): ApiException
    {
        return match ($statusCode) {
            400 => new BadRequestException($message, $statusCode, $payload, $headers, $operationId),
            401 => new UnauthorizedException($message, $statusCode, $payload, $headers, $operationId),
            403 => new ForbiddenException($message, $statusCode, $payload, $headers, $operationId),
            404 => new NotFoundException($message, $statusCode, $payload, $headers, $operationId),
            409 => new ConflictException($message, $statusCode, $payload, $headers, $operationId),
            422 => new UnprocessableEntityException($message, $statusCode, $payload, $headers, $operationId),
            429 => new RateLimitedException($message, $statusCode, $payload, $headers, $operationId),
            500 => new ServerErrorException($message, $statusCode, $payload, $headers, $operationId),
            503 => new ServiceUnavailableException($message, $statusCode, $payload, $headers, $operationId),
            default => new UnexpectedStatusException($message, $statusCode, $payload, $headers, $operationId),
        };
    }
}
