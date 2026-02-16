<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\BankafschriftBestandResponse;

final class BankafschriftbestandenService extends AbstractService
{
    /**
     * Operation ID: v2-bankafschriftbestanden-POST
     * @return array<int, BankafschriftBestandResponse>
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
