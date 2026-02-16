<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class PrijsafsprakenService extends AbstractService
{
    /**
     * Operation ID: v2-prijsafspraken-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\PrijsafspraakModelArray
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
        $result = $this->call('v2-prijsafspraken-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }
}
