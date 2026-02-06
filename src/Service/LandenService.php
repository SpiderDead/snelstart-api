<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class LandenService extends AbstractService
{
    /**
     * Operation ID: v2-landen-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2LandenGET(): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsLandenLandModelArray
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-landen-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-landen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2LandenIdGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsLandenLandModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-landen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
