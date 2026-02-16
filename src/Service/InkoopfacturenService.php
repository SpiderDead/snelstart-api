<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\InkoopfactuurModel;

final class InkoopfacturenService extends AbstractService
{
    /**
     * Operation ID: v2-inkoopfacturen-GET-OData
     * @return array<int, InkoopfactuurModel>
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
        $result = $this->call('v2-inkoopfacturen-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }
}
