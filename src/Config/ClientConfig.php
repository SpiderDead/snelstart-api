<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Config;

use InvalidArgumentException;
use SpiderDead\SnelStartApi\Auth\AuthMode;

final class ClientConfig
{
    public readonly string $baseUri;
    public readonly string $apiKey;
    public readonly AuthMode $authMode;
    public readonly string $userAgent;

    public function __construct(
        string $apiKey,
        string $baseUri = 'https://b2bapi.snelstart.nl/v2',
        AuthMode $authMode = AuthMode::Header,
        string $userAgent = 'spiderdead/snelstart-api'
    ) {
        if ($apiKey === '') {
            throw new InvalidArgumentException('API key must not be empty.');
        }

        $this->apiKey = $apiKey;
        $this->baseUri = rtrim($baseUri, '/');
        $this->authMode = $authMode;
        $this->userAgent = $userAgent;
    }
}
