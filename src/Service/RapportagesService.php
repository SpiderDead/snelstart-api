<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class RapportagesService extends AbstractService
{
    /**
     * Operation ID: v2-rapportages-kolommenbalans-GET
     * @return array<int, \SpiderDead\SnelStartApi\Model\KolommenbalansRegelModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function allKolommenbalans(\DateTimeImmutable $end, \DateTimeImmutable $start): array
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
     * @return array<int, \SpiderDead\SnelStartApi\Model\PeriodebalansRegelModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function allPeriodebalans(\DateTimeImmutable $end, \DateTimeImmutable $start): array
    {
        $pathParams = [];
        $queryParams = [];
        $queryParams['end'] = $end;
        $queryParams['start'] = $start;
        $result = $this->call('v2-rapportages-periodebalans-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
