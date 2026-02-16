<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class MemoriaalboekingenService extends AbstractService
{
    /**
     * Operation ID: v2-memoriaalboekingen-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2MemoriaalboekingenPOST(?\SpiderDead\SnelStartApi\Model\MemoriaalboekingModel $body = null): \SpiderDead\SnelStartApi\Model\MemoriaalboekingModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-memoriaalboekingen-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-memoriaalboekingen-id-DELETE
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2MemoriaalboekingenIdDELETE(string $id): \SpiderDead\SnelStartApi\Model\MemoriaalboekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-memoriaalboekingen-id-DELETE', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-memoriaalboekingen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2MemoriaalboekingenIdGET(string $id): \SpiderDead\SnelStartApi\Model\MemoriaalboekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-memoriaalboekingen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-memoriaalboekingen-id-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2MemoriaalboekingenIdPUT(string $id, ?\SpiderDead\SnelStartApi\Model\MemoriaalboekingModel $body = null): \SpiderDead\SnelStartApi\Model\MemoriaalboekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-memoriaalboekingen-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
