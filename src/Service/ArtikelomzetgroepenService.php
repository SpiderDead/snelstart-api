<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class ArtikelomzetgroepenService extends AbstractService
{
    /**
     * Operation ID: v2-artikelomzetgroepen-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2ArtikelomzetgroepenGET(): \SpiderDead\SnelStartApi\Model\ArtikelOmzetGroepModelArray
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-artikelomzetgroepen-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-artikelomzetgroepen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2ArtikelomzetgroepenIdGET(string $id): \SpiderDead\SnelStartApi\Model\ArtikelOmzetGroepModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-artikelomzetgroepen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
