<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Exception;

use RuntimeException;
use Throwable;

class ApiException extends RuntimeException
{
    /**
     * @param array<string, array<int, string>> $headers
     */
    public function __construct(
        string $message,
        private readonly int $statusCode,
        private readonly string $responseBody = '',
        private readonly array $headers = [],
        private readonly ?string $operationId = null,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $statusCode, $previous);
    }

    public function statusCode(): int
    {
        return $this->statusCode;
    }

    public function responseBody(): string
    {
        return $this->responseBody;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function headers(): array
    {
        return $this->headers;
    }

    public function operationId(): ?string
    {
        return $this->operationId;
    }
}
