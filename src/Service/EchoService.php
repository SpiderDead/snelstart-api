<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class EchoService extends AbstractService
{
    /**
     * Operation ID: v2-echo-input-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(string $input): \SpiderDead\SnelStartApi\Model\ArtikelenIdDelete200ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['input'] = $input;
        $queryParams = [];
        $result = $this->call('v2-echo-input-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
