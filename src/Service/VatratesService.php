<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class VatratesService extends AbstractService
{
    /**
     * Operation ID: v2-vatrates-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\VatRatesModelArray
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
        $result = $this->call('v2-vatrates-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-vatrates-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): \SpiderDead\SnelStartApi\Model\VatRatesModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-vatrates-id-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
