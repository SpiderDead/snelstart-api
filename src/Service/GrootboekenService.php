<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class GrootboekenService extends AbstractService
{
    /**
     * Operation ID: v2-grootboeken-GET-OData
     * @return array<int, \SpiderDead\SnelStartApi\Model\GrootboekModel>
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
        $result = $this->call('v2-grootboeken-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-grootboeken-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function create(?\SpiderDead\SnelStartApi\Model\GrootboekModel $body = null): \SpiderDead\SnelStartApi\Model\GrootboekModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-grootboeken-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-grootboeken-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): \SpiderDead\SnelStartApi\Model\GrootboekModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-grootboeken-id-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
