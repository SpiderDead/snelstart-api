<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\ArtikelOmzetGroepModel;

final class ArtikelomzetgroepenService extends AbstractService
{
    /**
     * Operation ID: v2-artikelomzetgroepen-GET
     * @return array<int, ArtikelOmzetGroepModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(): array
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
    public function get(string $id): ArtikelOmzetGroepModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-artikelomzetgroepen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
