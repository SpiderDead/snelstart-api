<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class VerkoopordersjablonenService extends AbstractService
{
    /**
     * Operation ID: v2-verkoopordersjablonen-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(): \SpiderDead\SnelStartApi\Model\VerkoopOrderSjabloonModelA
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-verkoopordersjablonen-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-verkoopordersjablonen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): \SpiderDead\SnelStartApi\Model\VerkoopOrderSjabloonModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkoopordersjablonen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
