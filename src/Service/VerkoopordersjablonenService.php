<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\VerkoopOrderSjabloonModel;

final class VerkoopordersjablonenService extends AbstractService
{
    /**
     * Operation ID: v2-verkoopordersjablonen-GET
     * @return array<int, VerkoopOrderSjabloonModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(): array
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
    public function get(string $id): VerkoopOrderSjabloonModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-verkoopordersjablonen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
