<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class VatratedefinitionsService extends AbstractService
{
    /**
     * Operation ID: v2-vatratedefinitions-GET-OData
     * @return array<int, \SpiderDead\SnelStartApi\Model\VatRateDefinitionModel>
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
        $result = $this->call('v2-vatratedefinitions-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }
}
