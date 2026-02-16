<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\CompanyInfoModel;

final class CompanyInfoService extends AbstractService
{
    /**
     * Operation ID: v2-companyInfo-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(): CompanyInfoModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-companyInfo-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-companyInfo-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function update(?CompanyInfoModel $body = null): CompanyInfoModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-companyInfo-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
