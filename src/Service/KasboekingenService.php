<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class KasboekingenService extends AbstractService
{
    /**
     * Operation ID: v2-kasboekingen-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2KasboekingenGETOData(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKasboekingenKasboekingModelArray
    {
        $pathParams = [];
        $queryParams = [];
        if ($filter !== null) {
            $queryParams['$filter'] = $filter;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        $result = $this->call('v2-kasboekingen-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-kasboekingen-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2KasboekingenPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKasboekingenKasboekingModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKasboekingenKasboekingModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-kasboekingen-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-kasboekingen-id-DELETE
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2KasboekingenIdDELETE(string $id): \SpiderDead\SnelStartApi\Model\KasboekingenIdDelete200ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-kasboekingen-id-DELETE', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-kasboekingen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2KasboekingenIdGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKasboekingenKasboekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-kasboekingen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-kasboekingen-id-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2KasboekingenIdPUT(string $id, ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKasboekingenKasboekingModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKasboekingenKasboekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-kasboekingen-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
