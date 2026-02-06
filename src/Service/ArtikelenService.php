<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class ArtikelenService extends AbstractService
{
    /**
     * Operation ID: v2-artikelen-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2ArtikelenGETOData(?string $filter = null, ?int $skip = null, ?int $top = null, ?int $aantal = null, ?string $relatieId = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenArtikelQueryModelArray
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
        if ($aantal !== null) {
            $queryParams['aantal'] = $aantal;
        }
        if ($relatieId !== null) {
            $queryParams['relatieId'] = $relatieId;
        }
        $result = $this->call('v2-artikelen-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-artikelen-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2ArtikelenPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenArtikelModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenArtikelModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-artikelen-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-artikelen-prijsafspraken-GET-OData
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2ArtikelenPrijsafsprakenGETOData(?string $filter = null, ?int $skip = null, ?int $top = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenArtikelPrijsAfsprakenModelArray
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
        $result = $this->call('v2-artikelen-prijsafspraken-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-artikelen-id-DELETE
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2ArtikelenIdDELETE(string $id): \SpiderDead\SnelStartApi\Model\ArtikelenIdDelete200ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-artikelen-id-DELETE', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-artikelen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2ArtikelenIdGET(string $id, ?int $aantal = null, ?string $relatieId = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenArtikelQueryModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        if ($aantal !== null) {
            $queryParams['aantal'] = $aantal;
        }
        if ($relatieId !== null) {
            $queryParams['relatieId'] = $relatieId;
        }
        $result = $this->call('v2-artikelen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-artikelen-id-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2ArtikelenIdPUT(string $id, ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenArtikelModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenArtikelModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-artikelen-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-artikelen-id-customFields-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2ArtikelenIdCustomFieldsGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartBusinessInterfacesCustomFieldsCustomFieldDtoArray
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-artikelen-id-customFields-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-artikelen-id-customFields-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2ArtikelenIdCustomFieldsPUT(string $id, ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsCustomFieldsUpdatedCustomFieldModelArray $body = null): \SpiderDead\SnelStartApi\Model\SnelStartBusinessInterfacesCustomFieldsCustomFieldDtoArray2
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-artikelen-id-customFields-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
