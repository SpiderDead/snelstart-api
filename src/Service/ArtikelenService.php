<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\ArtikelModel;
use SpiderDead\SnelStartApi\Model\ArtikelPrijsAfsprakenModel;
use SpiderDead\SnelStartApi\Model\ArtikelQueryModel;
use SpiderDead\SnelStartApi\Model\CustomFieldDto;

final class ArtikelenService extends AbstractService
{
    /**
     * Operation ID: v2-artikelen-GET-OData
     * @return array<int, ArtikelQueryModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(?string $filter = null, ?int $skip = null, ?int $top = null, ?int $aantal = null, ?string $relatieId = null): array
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
    public function create(?ArtikelModel $body = null): ArtikelModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-artikelen-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-artikelen-prijsafspraken-GET-OData
     * @return array<int, ArtikelPrijsAfsprakenModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function allPrijsafspraken(?string $filter = null, ?int $skip = null, ?int $top = null): array
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
    public function delete(string $id): void
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-artikelen-id-DELETE', $pathParams, $queryParams, null);
        return;
    }

    /**
     * Operation ID: v2-artikelen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id, ?int $aantal = null, ?string $relatieId = null): ArtikelQueryModel
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
    public function update(string $id, ?ArtikelModel $body = null): ArtikelModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-artikelen-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-artikelen-id-customFields-GET
     * @return array<int, CustomFieldDto>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function getCustomFields(string $id): array
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-artikelen-id-customFields-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-artikelen-id-customFields-PUT
     * @return array<int, CustomFieldDto>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function updateCustomFields(string $id, mixed $body = null): array
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-artikelen-id-customFields-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
