<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class VerkoopboekingenService extends AbstractService
{
    /**
     * Operation ID: v2-verkoopboekingen-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2VerkoopboekingenPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopBoekingenVerkoopBoekingModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopBoekingenVerkoopBoekingModel
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
    public function v2VerkoopboekingenIdDELETE(string $id): \SpiderDead\SnelStartApi\Model\VerkoopboekingenIdDelete200ApplicationJsonResponse
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
    public function v2VerkoopboekingenIdGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopBoekingenVerkoopBoekingModel
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
    public function v2VerkoopboekingenIdPUT(string $id, ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopBoekingenVerkoopBoekingModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopBoekingenVerkoopBoekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkoopboekingen-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
