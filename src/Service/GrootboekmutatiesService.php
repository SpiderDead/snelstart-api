<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class GrootboekmutatiesService extends AbstractService
{
    /**
     * Operation ID: v2-grootboekmutaties-GET-OData
     * @return array<int, \SpiderDead\SnelStartApi\Model\GrootboekMutatieModel>
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
        $result = $this->call('v2-grootboekmutaties-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-grootboekmutaties-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): \SpiderDead\SnelStartApi\Model\GrootboekMutatieModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-grootboekmutaties-id-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
