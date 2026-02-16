<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

final class InkoopboekingenService extends AbstractService
{
    /**
     * Operation ID: v2-inkoopboekingen-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function create(?\SpiderDead\SnelStartApi\Model\InkoopboekingModel $body = null): \SpiderDead\SnelStartApi\Model\InkoopboekingModel
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
    public function createFromAttachment(?\SpiderDead\SnelStartApi\Model\AttachmentModel $body = null): \SpiderDead\SnelStartApi\Model\CreateFromAttachmentModel
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
    public function getCreateFromAttachmentStatus(string $instanceId): \SpiderDead\SnelStartApi\Model\CreateFromAttachmentStatusModel
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
    public function createUbl(?\SpiderDead\SnelStartApi\Model\UblContentModel $body = null): \SpiderDead\SnelStartApi\Model\InkoopboekingModel
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
    public function delete(string $id): \SpiderDead\SnelStartApi\Model\ArtikelenIdDelete200ApplicationJsonResponse
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
    public function get(string $id): \SpiderDead\SnelStartApi\Model\InkoopboekingModel
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
    public function update(string $id, ?\SpiderDead\SnelStartApi\Model\InkoopboekingModel $body = null): \SpiderDead\SnelStartApi\Model\InkoopboekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-inkoopboekingen-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
