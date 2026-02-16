<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class LandenService extends AbstractService
{
    /**
     * Operation ID: v2-landen-GET
     * @return array<int, \SpiderDead\SnelStartApi\Model\LandModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(): array
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
    public function get(string $id): \SpiderDead\SnelStartApi\Model\LandModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-landen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
