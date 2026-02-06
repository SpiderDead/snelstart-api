<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class VatratedefinitionsService extends AbstractService
{
    /**
     * Operation ID: v2-vatratedefinitions-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2VatratedefinitionsGETOData(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVatRatesVatRateDefinitionModelArray
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
