<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\DoorlopendeIncassoMachtigingModel;
use SpiderDead\SnelStartApi\Model\InkoopboekingModel;
use SpiderDead\SnelStartApi\Model\RelatieCustomFieldsModel;
use SpiderDead\SnelStartApi\Model\RelatieModel;
use SpiderDead\SnelStartApi\Model\RelatieUpdatedCustomFieldsModel;
use SpiderDead\SnelStartApi\Model\RelatieWriteModel;
use SpiderDead\SnelStartApi\Model\VerkoopBoekingModel;

final class RelatiesService extends AbstractService
{
    /**
     * Operation ID: v2-relaties-GET-OData
     * @return array<int, RelatieModel>
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
    public function create(?RelatieWriteModel $body = null): RelatieWriteModel
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
    public function delete(string $id): void
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-DELETE', $pathParams, $queryParams, null);
        return;
    }

    /**
     * Operation ID: v2-relaties-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): RelatieModel
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
    public function update(string $id, ?RelatieWriteModel $body = null): RelatieWriteModel
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
    public function getCustomFields(string $id): RelatieCustomFieldsModel
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
    public function updateCustomFields(string $id, ?RelatieUpdatedCustomFieldsModel $body = null): RelatieCustomFieldsModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-relaties-id-customFields-PUT', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-relaties-id-doorlopendeincassomachtigingen-GET
     * @return array<int, DoorlopendeIncassoMachtigingModel>
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
     * @return array<int, InkoopboekingModel>
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
     * @return array<int, VerkoopBoekingModel>
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
