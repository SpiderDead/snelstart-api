<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class RelatiesService extends AbstractService
{
    /**
     * Operation ID: v2-relaties-GET-OData
     * @return array<int, \SpiderDead\SnelStartApi\Model\RelatieModel>
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
        $result = $this->call('v2-relaties-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function create(?\SpiderDead\SnelStartApi\Model\RelatieWriteModel $body = null): \SpiderDead\SnelStartApi\Model\RelatieWriteModel
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
    public function delete(string $id): \SpiderDead\SnelStartApi\Model\ArtikelenIdDelete200ApplicationJsonResponse
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
    public function get(string $id): \SpiderDead\SnelStartApi\Model\RelatieModel
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
    public function update(string $id, ?\SpiderDead\SnelStartApi\Model\RelatieWriteModel $body = null): \SpiderDead\SnelStartApi\Model\RelatieWriteModel
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
    public function getCustomFields(string $id): \SpiderDead\SnelStartApi\Model\RelatieCustomFieldsModel
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
    public function updateCustomFields(string $id, ?\SpiderDead\SnelStartApi\Model\RelatieUpdatedCustomFieldsModel $body = null): \SpiderDead\SnelStartApi\Model\RelatieCustomFieldsModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-customFields-PUT', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-doorlopendeincassomachtigingen-GET
     * @return array<int, \SpiderDead\SnelStartApi\Model\DoorlopendeIncassoMachtigingModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function getDoorlopendeincassomachtigingen(string $id): array
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-doorlopendeincassomachtigingen-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-inkoopboekingen-GET
     * @return array<int, \SpiderDead\SnelStartApi\Model\InkoopboekingModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function getInkoopboekingen(string $id): array
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-inkoopboekingen-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-verkoopboekingen-GET
     * @return array<int, \SpiderDead\SnelStartApi\Model\VerkoopBoekingModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function getVerkoopboekingen(string $id): array
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-verkoopboekingen-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
