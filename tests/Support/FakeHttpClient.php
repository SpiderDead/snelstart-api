<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Tests\Support;

use Nyholm\Psr7\Response;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RuntimeException;

final class FakeHttpClient implements ClientInterface
{
    private ?RequestInterface $lastRequest = null;
    private ResponseInterface $nextResponse;

    public function __construct(?ResponseInterface $nextResponse = null)
    {
        $this->nextResponse = $nextResponse ?? new Response(200, ['Content-Type' => 'application/json'], '{}');
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $this->lastRequest = $request;

        return $this->nextResponse;
    }

    public function setNextResponse(ResponseInterface $response): void
    {
        $this->nextResponse = $response;
    }

    public function lastRequest(): RequestInterface
    {
        if ($this->lastRequest === null) {
            throw new RuntimeException('No request captured yet.');
        }

        return $this->lastRequest;
    }
}
