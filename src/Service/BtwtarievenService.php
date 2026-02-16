<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class BtwtarievenService extends AbstractService
{
    /**
     * Operation ID: v2-btwtarieven-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(): \SpiderDead\SnelStartApi\Model\BtwTariefModelArray
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-btwtarieven-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
