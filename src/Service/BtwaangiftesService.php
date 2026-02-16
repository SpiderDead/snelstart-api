<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\BtwAangifteModel;
use SpiderDead\SnelStartApi\Model\UpdateBtwAangifteStatusModel;

final class BtwaangiftesService extends AbstractService
{
    /**
     * Operation ID: v2-btwaangiftes-GET-OData
     * @return array<int, BtwAangifteModel>
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
        $result = $this->call('v2-btwaangiftes-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-btwaangiftes-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): BtwAangifteModel
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
    public function updateExternAangeven(string $id, ?UpdateBtwAangifteStatusModel $body = null): void
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-btwaangiftes-id-externAangeven-PUT', $pathParams, $queryParams, $body);
        return;
    }
}
