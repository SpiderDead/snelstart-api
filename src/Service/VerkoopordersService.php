<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class VerkoopordersService extends AbstractService
{
    /**
     * Operation ID: v2-verkooporders-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\VerkoopOrderModelArray
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
    public function create(?\SpiderDead\SnelStartApi\Model\VerkoopOrderModel $body = null): \SpiderDead\SnelStartApi\Model\VerkoopOrderModel
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
    public function delete(string $id): \SpiderDead\SnelStartApi\Model\ArtikelenIdDelete200ApplicationJsonResponse
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
    public function get(string $id): \SpiderDead\SnelStartApi\Model\VerkoopOrderModel
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
    public function update(string $id, ?\SpiderDead\SnelStartApi\Model\VerkoopOrderModel $body = null): \SpiderDead\SnelStartApi\Model\VerkoopOrderModel
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
    public function updateProcesStatus(string $id, ?\SpiderDead\SnelStartApi\Model\VerkooporderUpdateProcesStatusModel $body = null): \SpiderDead\SnelStartApi\Model\ArtikelenIdDelete200ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkooporders-id-ProcesStatus-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
