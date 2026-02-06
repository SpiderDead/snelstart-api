<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class GrootboekenService extends AbstractService
{
    /**
     * Operation ID: v2-grootboeken-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2GrootboekenGETOData(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsGrootboekenGrootboekModelArray
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
    public function v2GrootboekenPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsGrootboekenGrootboekModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsGrootboekenGrootboekModel
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
    public function v2GrootboekenIdGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsGrootboekenGrootboekModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-grootboeken-id-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
