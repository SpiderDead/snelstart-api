<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class BtwaangiftesService extends AbstractService
{
    /**
     * Operation ID: v2-btwaangiftes-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2BtwaangiftesGETOData(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\BtwAangifteModelArray
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
        $result = $this->call('v2-btwaangiftes-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-btwaangiftes-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2BtwaangiftesIdGET(string $id): \SpiderDead\SnelStartApi\Model\BtwAangifteModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-btwaangiftes-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-btwaangiftes-id-externAangeven-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2BtwaangiftesIdExternAangevenPUT(string $id, ?\SpiderDead\SnelStartApi\Model\UpdateBtwAangifteStatusModel $body = null): void
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-btwaangiftes-id-externAangeven-PUT', $pathParams, $queryParams, $body);
        return;
    }
}
