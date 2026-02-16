<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class VerkoopfacturenService extends AbstractService
{
    /**
     * Operation ID: v2-verkoopfacturen-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\VerkoopfactuurModelArray
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
        $result = $this->call('v2-verkoopfacturen-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-verkoopfacturen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): \SpiderDead\SnelStartApi\Model\VerkoopfactuurModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkoopfacturen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-verkoopfacturen-id-ubl-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function getUbl(string $id): \SpiderDead\SnelStartApi\Model\VerkoopfacturenIdUblGet200ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkoopfacturen-id-ubl-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
