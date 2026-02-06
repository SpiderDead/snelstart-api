<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class DagboekenService extends AbstractService
{
    /**
     * Operation ID: v2-dagboeken-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2DagboekenGET(): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsDagboekenDagboekModelArray
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-dagboeken-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
