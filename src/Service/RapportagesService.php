<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class RapportagesService extends AbstractService
{
    /**
     * Operation ID: v2-rapportages-kolommenbalans-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RapportagesKolommenbalansGET(\DateTimeImmutable $end, \DateTimeImmutable $start): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRapportageKolommenbalansRegelModelArray
    {
        $pathParams = [];
        $queryParams = [];
        $queryParams['end'] = $end;
        $queryParams['start'] = $start;
        $result = $this->call('v2-rapportages-kolommenbalans-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-rapportages-periodebalans-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2RapportagesPeriodebalansGET(\DateTimeImmutable $end, \DateTimeImmutable $start): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRapportagePeriodebalansRegelModelArray
    {
        $pathParams = [];
        $queryParams = [];
        $queryParams['end'] = $end;
        $queryParams['start'] = $start;
        $result = $this->call('v2-rapportages-periodebalans-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
