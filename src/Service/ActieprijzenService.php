<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class ActieprijzenService extends AbstractService
{
    /**
     * Operation ID: v2-actieprijzen-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2ActieprijzenGETOData(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsActieprijzenActieprijzenModelArray
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
