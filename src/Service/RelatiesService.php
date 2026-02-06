<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class RelatiesService extends AbstractService
{
    /**
     * Operation ID: v2-relaties-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RelatiesGETOData(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieModelArray
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
        $result = $this->call('v2-relaties-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RelatiesPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieWriteModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieWriteModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-relaties-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-DELETE
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RelatiesIdDELETE(string $id): \SpiderDead\SnelStartApi\Model\RelatiesIdDelete200ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-DELETE', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RelatiesIdGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RelatiesIdPUT(string $id, ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieWriteModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieWriteModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-customFields-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RelatiesIdCustomFieldsGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsCustomFieldsRelatieCustomFieldsModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-customFields-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-customFields-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RelatiesIdCustomFieldsPUT(string $id, ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsCustomFieldsRelatieUpdatedCustomFieldsModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsCustomFieldsRelatieCustomFieldsModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-customFields-PUT', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-doorlopendeincassomachtigingen-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RelatiesIdDoorlopendeincassomachtigingenGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesDoorlopendeIncassoMachtigingModelArray
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-doorlopendeincassomachtigingen-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-inkoopboekingen-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RelatiesIdInkoopboekingenGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenInkoopboekingModelArray
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-inkoopboekingen-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-verkoopboekingen-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RelatiesIdVerkoopboekingenGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopBoekingenVerkoopBoekingModelArray
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-verkoopboekingen-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
