<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class KostenplaatsenService extends AbstractService
{
    /**
     * Operation ID: v2-kostenplaatsen-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(): \SpiderDead\SnelStartApi\Model\KostenplaatsModelArray
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-kostenplaatsen-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-kostenplaatsen-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function create(?\SpiderDead\SnelStartApi\Model\KostenplaatsModel $body = null): \SpiderDead\SnelStartApi\Model\KostenplaatsModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-kostenplaatsen-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-kostenplaatsen-id-DELETE
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function delete(string $id): \SpiderDead\SnelStartApi\Model\ArtikelenIdDelete200ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-kostenplaatsen-id-DELETE', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-kostenplaatsen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): \SpiderDead\SnelStartApi\Model\KostenplaatsModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-kostenplaatsen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-kostenplaatsen-id-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function update(string $id, ?\SpiderDead\SnelStartApi\Model\KostenplaatsModel $body = null): \SpiderDead\SnelStartApi\Model\KostenplaatsModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-kostenplaatsen-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
