<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class VerkoopboekingenService extends AbstractService
{
    /**
     * Operation ID: v2-verkoopboekingen-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function create(?\SpiderDead\SnelStartApi\Model\VerkoopBoekingModel $body = null): \SpiderDead\SnelStartApi\Model\VerkoopBoekingModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-verkoopboekingen-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-verkoopboekingen-id-DELETE
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function delete(string $id): \SpiderDead\SnelStartApi\Model\ArtikelenIdDelete200ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkoopboekingen-id-DELETE', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-verkoopboekingen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): \SpiderDead\SnelStartApi\Model\VerkoopBoekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkoopboekingen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-verkoopboekingen-id-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function update(string $id, ?\SpiderDead\SnelStartApi\Model\VerkoopBoekingModel $body = null): \SpiderDead\SnelStartApi\Model\VerkoopBoekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkoopboekingen-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
