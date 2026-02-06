<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class CompanyInfoService extends AbstractService
{
    /**
     * Operation ID: v2-companyInfo-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2CompanyInfoGET(): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsCompanyInfoCompanyInfoModel
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
    public function v2CompanyInfoPUT(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsCompanyInfoCompanyInfoModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsCompanyInfoCompanyInfoModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-companyInfo-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
