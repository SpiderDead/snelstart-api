<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class VerkoopordersService extends AbstractService
{
    /**
     * Operation ID: v2-verkooporders-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2VerkoopordersGETOData(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersVerkoopOrderModelArray
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
        $result = $this->call('v2-verkooporders-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-verkooporders-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2VerkoopordersPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersVerkoopOrderModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersVerkoopOrderModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-verkooporders-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-verkooporders-id-DELETE
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2VerkoopordersIdDELETE(string $id): \SpiderDead\SnelStartApi\Model\VerkoopordersIdDelete201ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkooporders-id-DELETE', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-verkooporders-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2VerkoopordersIdGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersVerkoopOrderModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkooporders-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-verkooporders-id-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2VerkoopordersIdPUT(string $id, ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersVerkoopOrderModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersVerkoopOrderModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkooporders-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-verkooporders-id-ProcesStatus-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2VerkoopordersIdProcesStatusPUT(string $id, ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersVerkooporderUpdateProcesStatusModel $body = null): \SpiderDead\SnelStartApi\Model\VerkoopordersIdProcesStatusPut200ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkooporders-id-ProcesStatus-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
