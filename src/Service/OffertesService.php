<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\OfferteModel;

final class OffertesService extends AbstractService
{
    /**
     * Operation ID: v2-offertes-GET-OData
     * @return array<int, OfferteModel>
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
        $result = $this->call('v2-offertes-GET-OData', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-offertes-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function create(?OfferteModel $body = null): OfferteModel
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
    public function delete(string $id): void
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-offertes-id-DELETE', $pathParams, $queryParams, null);
        return;
    }

    /**
     * Operation ID: v2-offertes-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): OfferteModel
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
    public function update(string $id, ?OfferteModel $body = null): OfferteModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-offertes-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
