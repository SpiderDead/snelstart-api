<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\ActieprijzenModel;

final class ActieprijzenService extends AbstractService
{
    /**
     * Operation ID: v2-actieprijzen-GET-OData
     * @return array<int, ActieprijzenModel>
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
        $result = $this->call('v2-actieprijzen-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }
}
