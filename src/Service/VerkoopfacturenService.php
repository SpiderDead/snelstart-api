<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\VerkoopfactuurModel;

final class VerkoopfacturenService extends AbstractService
{
    /**
     * Operation ID: v2-verkoopfacturen-GET-OData
     * @return array<int, VerkoopfactuurModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(?string $filter = null, ?int $skip = null, ?int $top = null): array
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
    public function get(string $id): VerkoopfactuurModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkoopfacturen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-verkoopfacturen-id-ubl-GET
     * @return array<int, mixed>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function getUbl(string $id): array
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkoopfacturen-id-ubl-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
