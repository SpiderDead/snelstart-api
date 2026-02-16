<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\AttachmentModel;
use SpiderDead\SnelStartApi\Model\CreateFromAttachmentModel;
use SpiderDead\SnelStartApi\Model\CreateFromAttachmentStatusModel;
use SpiderDead\SnelStartApi\Model\InkoopboekingModel;
use SpiderDead\SnelStartApi\Model\UblContentModel;

final class InkoopboekingenService extends AbstractService
{
    /**
     * Operation ID: v2-inkoopboekingen-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function create(?InkoopboekingModel $body = null): InkoopboekingModel
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
    public function createFromAttachment(?AttachmentModel $body = null): CreateFromAttachmentModel
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
    public function getCreateFromAttachmentStatus(string $instanceId): CreateFromAttachmentStatusModel
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
    public function createUbl(?UblContentModel $body = null): InkoopboekingModel
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
    public function delete(string $id): void
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-inkoopboekingen-id-DELETE', $pathParams, $queryParams, null);
        return;
    }

    /**
     * Operation ID: v2-inkoopboekingen-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): InkoopboekingModel
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
    public function update(string $id, ?InkoopboekingModel $body = null): InkoopboekingModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-inkoopboekingen-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
