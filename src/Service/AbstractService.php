<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Http\ApiTransport;

abstract class AbstractService
{
    public function __construct(protected ApiTransport $transport)
    {
    }

    /**
     * @param array<string, mixed> $pathParams
     * @param array<string, mixed> $queryParams
     */
    protected function call(string $operationId, array $pathParams = [], array $queryParams = [], mixed $body = null): mixed
    {
        return $this->transport->execute($operationId, $pathParams, $queryParams, $body);
    }
}
