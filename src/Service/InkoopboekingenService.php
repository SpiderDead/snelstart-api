<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class InkoopboekingenService extends AbstractService
{
    /**
     * Operation ID: v2-inkoopboekingen-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2InkoopboekingenPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenInkoopboekingModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenInkoopboekingModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-inkoopboekingen-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-inkoopboekingen-CreateFromAttachment-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2InkoopboekingenCreateFromAttachmentPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenAttachmentModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenCreateFromAttachmentModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-inkoopboekingen-CreateFromAttachment-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-inkoopboekingen-GetCreateFromAttachmentStatus-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2InkoopboekingenGetCreateFromAttachmentStatusGET(string $instanceId): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenCreateFromAttachmentStatusModel
    {
        $pathParams = [];
        $queryParams = [];
        $queryParams['instanceId'] = $instanceId;
        $result = $this->call('v2-inkoopboekingen-GetCreateFromAttachmentStatus-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-inkoopboekingen-ubl-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2InkoopboekingenUblPOST(?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsBijlagenUblContentModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenInkoopboekingModel
    {
        $pathParams = [];
        $queryParams = [];
        $result = $this->call('v2-inkoopboekingen-ubl-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-inkoopboekingen-id-DELETE
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2InkoopboekingenIdDELETE(string $id): \SpiderDead\SnelStartApi\Model\InkoopboekingenIdDelete200ApplicationJsonResponse
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-inkoopboekingen-id-DELETE', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-inkoopboekingen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2InkoopboekingenIdGET(string $id): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenInkoopboekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-inkoopboekingen-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-inkoopboekingen-id-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function v2InkoopboekingenIdPUT(string $id, ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenInkoopboekingModel $body = null): \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenInkoopboekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-inkoopboekingen-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
