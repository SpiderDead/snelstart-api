<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Service;

use SpiderDead\SnelStartApi\Model\AdministrationAccessModel;

final class AuthorizationService extends AbstractService
{
    /**
     * Operation ID: v2-authorization-HasUserAccessToAdministration-GET
     * @throws \SpiderDead\SnelStartApi\Exception\ApiException
     */
    public function allHasUserAccessToAdministration(string $userIdentifier): AdministrationAccessModel
    {
        $pathParams = [];
        $queryParams = [];
        $queryParams['userIdentifier'] = $userIdentifier;
        $result = $this->call('v2-authorization-HasUserAccessToAdministration-GET', $pathParams, $queryParams, null);
        return $result;
    }
}
