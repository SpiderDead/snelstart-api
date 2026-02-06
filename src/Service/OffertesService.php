<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class OffertesService extends AbstractService
{
    /**
     * Operation ID: v2-offertes-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2OffertesGETOData(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersOfferteModelArray
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
        $result = $this->call('v2-offertes-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-offertes-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2OffertesPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersOfferteModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersOfferteModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-offertes-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-offertes-id-DELETE
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2OffertesIdDELETE(string $id): \SpiderDead\SnelStartApi\Model\OffertesIdDelete201ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-offertes-id-DELETE', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-offertes-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2OffertesIdGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersOfferteModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-offertes-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-offertes-id-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2OffertesIdPUT(string $id, ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersOfferteModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersOfferteModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-offertes-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
