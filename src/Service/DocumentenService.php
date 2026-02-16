<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\DocumentContentModel;
use SpiderDead\SnelStartApi\Model\DocumentIdentifierModel;
use SpiderDead\SnelStartApi\Model\VerkoopBoekingBijlageReferenceModel;

final class DocumentenService extends AbstractService
{
    /**
     * Operation ID: v2-documenten-documenttype-POST
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function create(string $documenttype, ?DocumentContentModel $body = null): DocumentIdentifierModel
    {
        $pathParams = [];
        $pathParams['documenttype'] = $documenttype;
        $queryParams = [];
        $result = $this->call('v2-documenten-documenttype-POST', $pathParams, $queryParams, $body);
        return $result;
    }

    /**
     * Operation ID: v2-documenten-documenttype-pid-GET
     * @return array<int, VerkoopBoekingBijlageReferenceModel>
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function all(string $documenttype, string $pid): array
    {
        $pathParams = [];
        $pathParams['documenttype'] = $documenttype;
        $pathParams['pid'] = $pid;
        $queryParams = [];
        $result = $this->call('v2-documenten-documenttype-pid-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-documenten-id-DELETE
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function delete(string $id): void
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-documenten-id-DELETE', $pathParams, $queryParams, null);
        return;
    }

    /**
     * Operation ID: v2-documenten-id-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function get(string $id): DocumentContentModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-documenten-id-GET', $pathParams, $queryParams, null);
        return $result;
    }

    /**
     * Operation ID: v2-documenten-id-PUT
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function update(string $id, ?DocumentContentModel $body = null): DocumentIdentifierModel
    {
        $pathParams = [];
        $pathParams['id'] = $id;
        $queryParams = [];
        $result = $this->call('v2-documenten-id-PUT', $pathParams, $queryParams, $body);
        return $result;
    }
}
