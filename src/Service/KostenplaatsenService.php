<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class KostenplaatsenService extends AbstractService
{
    /**
     * Operation ID: v2-kostenplaatsen-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2KostenplaatsenGET(): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKostenplaatsenKostenplaatsModelArray
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-kostenplaatsen-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-kostenplaatsen-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2KostenplaatsenPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKostenplaatsenKostenplaatsModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKostenplaatsenKostenplaatsModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-kostenplaatsen-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-kostenplaatsen-id-DELETE
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2KostenplaatsenIdDELETE(string $id): \SpiderDead\SnelStartApi\Model\KostenplaatsenIdDelete200ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-kostenplaatsen-id-DELETE', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-kostenplaatsen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2KostenplaatsenIdGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKostenplaatsenKostenplaatsModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-kostenplaatsen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-kostenplaatsen-id-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2KostenplaatsenIdPUT(string $id, ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKostenplaatsenKostenplaatsModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKostenplaatsenKostenplaatsModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-kostenplaatsen-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
