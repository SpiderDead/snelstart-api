<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class BtwtarievenService extends AbstractService
{
    /**
     * Operation ID: v2-btwtarieven-GET
     * @return array<int, \SpiderDead\SnelStartApi\Model\BtwTariefModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(): array
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-btwtarieven-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
