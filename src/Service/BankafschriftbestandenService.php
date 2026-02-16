<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class BankafschriftbestandenService extends AbstractService
{
    /**
     * Operation ID: v2-bankafschriftbestanden-POST
     * @return array<int, \SpiderDead\SnelStartApi\Model\BankafschriftBestandResponse>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function create(mixed $body = null): array
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-bankafschriftbestanden-POST', $pathParams, $queryParams, $body);
        return $result;
    }
}
