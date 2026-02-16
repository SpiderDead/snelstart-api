<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\DagboekModel;

final class DagboekenService extends AbstractService
{
    /**
     * Operation ID: v2-dagboeken-GET
     * @return array<int, DagboekModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(): array
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-dagboeken-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
