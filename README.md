# spiderdead/snelstart-api

Typed PHP 8.2+ SDK for the SnelStart B2B API v2.

> **⚠️ WARNING: AI-Generated SDK**
> 
> This SDK is automatically generated from the SnelStart OpenAPI specification using AI-assisted tooling. While it has been thoroughly tested and follows best practices, please use at your own risk.
> 
> - ✅ Generated code is tested with PHPStan Level 6
> - ✅ All operations validated against OpenAPI spec
> - ✅ Comprehensive error handling
> - ⚠️ Not officially endorsed by SnelStart
> - ⚠️ Test thoroughly in your use case before production use
> 
> **Recommendation:** Thoroughly test all operations you intend to use in a development environment before deploying to production.

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

// Example: Get company information
$companyInfo = $client->companyInfo()->all();

// Example: List all articles
$artikelen = $client->artikelen()->all();

// Example: Get a specific customer
$customer = $client->relaties()->get($customerId);
```

## Documentation

Comprehensive documentation is available in the `/docs` directory:

- **[Quick Start Guide](docs/quick-start.md)** - Get started in 5 minutes
- **[Error Handling Guide](docs/error-handling.md)** - Exception handling strategies
- **[Service Reference](docs/services/README.md)** - All 31 services documented
- **[Model Reference](docs/models.md)** - Understanding the type system

## Auth Modes

- `AuthMode::Header` (default): sends `Ocp-Apim-Subscription-Key` header.
- `AuthMode::Query`: appends `subscription-key` query parameter.

## Features

- ✅ **Clean, semantic method names** - `all()`, `get()`, `create()`, `update()`, `delete()`
- ✅ **Type-safe models** - Required/optional properties enforced
- ✅ **Native PHP arrays** - No wrapper objects
- ✅ **11 exception types** - Comprehensive error handling
- ✅ **PSR-12 compliant** - Professional code quality
- ✅ **98 model classes** - Covering all API resources
- ✅ **31 service classes** - Organized by domain
- ✅ **96 operations** - Full API coverage

## Common Operations

```php
// List resources with filtering
$artikelen = $client->artikelen()->all(
    filter: "naam eq 'Product A'",
    top: 50
);

// Get single resource
$artikel = $client->artikelen()->get($id);

// Create resource
$newArtikel = new ArtikelModel();
$newArtikel->naam = 'New Product';
$created = $client->artikelen()->create($newArtikel);

// Update resource
$client->artikelen()->update($id, $updatedArtikel);

// Delete resource
$client->artikelen()->delete($id);  // Returns void
```

## Error Handling

```php
use SpiderDead\SnelStartApi\Exception\NotFoundException;
use SpiderDead\SnelStartApi\Exception\UnauthorizedException;
use SpiderDead\SnelStartApi\Exception\RateLimitedException;

try {
    $artikel = $client->artikelen()->get($id);
} catch (UnauthorizedException $e) {
    // Invalid API key
} catch (NotFoundException $e) {
    // Resource not found
} catch (RateLimitedException $e) {
    // Rate limit exceeded - retry after delay
}
```

See [Error Handling Guide](docs/error-handling.md) for complete exception reference.

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

## 📚 Complete Documentation

For comprehensive guides and service documentation, see:

- **[Documentation Index](docs/index.md)** - Start here for full documentation
- **[Quick Start Guide](docs/quick-start.md)** - Detailed getting started
- **[Service Reference](docs/services/README.md)** - All 31 services with examples
- **[Error Handling](docs/error-handling.md)** - Exception handling patterns

## License

See [LICENSE](LICENSE) file for details.

## Disclaimer

This is an unofficial, community-maintained SDK. It is not affiliated with or endorsed by SnelStart B.V. Use at your own risk and always test thoroughly before production deployment.
