<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class BankafschriftbestandenService extends AbstractService
{
    /**
     * Operation ID: v2-bankafschriftbestanden-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2BankafschriftbestandenPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsBankafschriftBestandArray $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsBankafschriftBestandResponseArray
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-bankafschriftbestanden-POST', $pathParams, $queryParams, $body);
        return $result;
    }
}
