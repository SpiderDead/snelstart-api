# spiderdead/snelstart-api

Typed PHP 8.2+ SDK for the SnelStart B2B API v2.

## Install

```bash
composer require spiderdead/snelstart-api
```

## Quick Start

```php
<?php

use Nyholm\Psr7\Factory\Psr17Factory;
use SpiderDead\SnelStartApi\Auth\AuthMode;
use SpiderDead\SnelStartApi\Config\ClientConfig;
use SpiderDead\SnelStartApi\SnelStartClient;
use Symfony\Component\HttpClient\Psr18Client;

$httpClient = new Psr18Client();
$factory = new Psr17Factory();

$config = new ClientConfig(
    apiKey: 'your-api-key',
    authMode: AuthMode::HEADER,
);

$client = new SnelStartClient($httpClient, $factory, $factory, $config);

$companyInfo = $client->companyInfo()->v2CompanyInfoGet();
```

## Auth Modes

- `AuthMode::HEADER` (default): sends `Ocp-Apim-Subscription-Key` header.
- `AuthMode::QUERY`: appends `subscription-key` query parameter.

## Regenerate SDK

The SDK is generated from `openapi/snelstart-b2b-api-v2.yaml`.

Requires Python 3 and `pyyaml` for generation commands.

```bash
composer generate
```

Check if generated code is up to date:

```bash
composer generate-check
```

## Testing

```bash
composer test
composer analyse
composer lint
```

Smoke tests need a real API key:

- `SNELSTART_API_KEY`
- Optional: `SNELSTART_BASE_URI` (defaults to production base URI)
