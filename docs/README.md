# SnelStart API SDK Documentation

A modern, type-safe PHP SDK for the SnelStart B2B API.

## Overview

This SDK provides a clean, intuitive interface to interact with the SnelStart accounting API. It features:

- ✅ **Clean, semantic method names** - RESTful conventions (`all()`, `get()`, `create()`, etc.)
- ✅ **Type-safe models** - Required/optional properties enforced
- ✅ **Native PHP arrays** - No wrapper objects
- ✅ **Comprehensive error handling** - 11 specific exception types
- ✅ **PSR-12 compliant** - Professional code quality
- ✅ **Auto-generated from OpenAPI** - Always up-to-date with API spec

## Quick Start

```php
use SpiderDead\SnelStartApi\SnelStartClient;
use SpiderDead\SnelStartApi\Config\ClientConfig;
use SpiderDead\SnelStartApi\Auth\AuthMode;
use Nyholm\Psr7\Factory\Psr17Factory;
use Symfony\Component\HttpClient\Psr18Client;

// Create client
$httpClient = new Psr18Client();
$factory = new Psr17Factory();

$config = new ClientConfig(
    apiKey: 'your-api-key-here',
    authMode: AuthMode::Header  // or AuthMode::Query
);

$client = new SnelStartClient(
    $httpClient,
    $factory,
    $factory,
    $config
);

// Use the API
$artikelen = $client->artikelen()->all();
foreach ($artikelen as $artikel) {
    echo $artikel->naam . "\n";
}

$artikel = $client->artikelen()->get($artikelId);
$newArtikel = $client->artikelen()->create($artikelData);
$client->artikelen()->update($artikelId, $updatedData);
$client->artikelen()->delete($artikelId);
```

## Available Services

The SDK provides access to 31 services:

| Service | Description | Methods |
|---------|-------------|---------|
| [Artikelen](services/artikelen.md) | Product/Article management | all, get, create, update, delete, customFields, prijsafspraken |
| [Relaties](services/relaties.md) | Customer/Supplier relations | all, get, create, update, delete, customFields, doorlopendeincassomachtigingen |
| [Verkoopfacturen](services/verkoopfacturen.md) | Sales invoices | all, get, create, update, UBL handling |
| [Inkoopboekingen](services/inkoopboekingen.md) | Purchase bookings | all, get, create, update, delete, createFromAttachment |
| [Bankboekingen](services/bankboekingen.md) | Bank transactions | all, get, create, update, delete |
| [Grootboeken](services/grootboeken.md) | General ledger | all, get |
| [Dagboeken](services/dagboeken.md) | Journals | all |
| [Btwaangiftes](services/btwaangiftes.md) | VAT returns | all, get, externAangeven |
| [CompanyInfo](services/companyinfo.md) | Company information | all, update |
| [Actieprijzen](services/actieprijzen.md) | Action prices | all |
| [Artikelomzetgroepen](services/artikelomzetgroepen.md) | Article revenue groups | all, get |
| [Authorization](services/authorization.md) | Access control | hasUserAccessToAdministration |
| [Bankafschriftbestanden](services/bankafschriftbestanden.md) | Bank statement files | create |
| [Btwtarieven](services/btwtarieven.md) | VAT rates | all |
| [Documenten](services/documenten.md) | Documents | all, get, create, delete |
| [Echo](services/echo.md) | Echo test service | echo |
| [Grootboekmutaties](services/grootboekmutaties.md) | General ledger mutations | all |
| [Inkoopfacturen](services/inkoopfacturen.md) | Purchase invoices | all, get |
| [Kasboekingen](services/kasboekingen.md) | Cash transactions | all, get, create, update, delete |
| [Kostenplaatsen](services/kostenplaatsen.md) | Cost centers | all, get, create, update, delete |
| [Landen](services/landen.md) | Countries | all, get |
| [Memoriaalboekingen](services/memoriaalboekingen.md) | Memorial bookings | all, get, create, update, delete |
| [Offertes](services/offertes.md) | Quotes | all, get, create, update, delete |
| [Prijsafspraken](services/prijsafspraken.md) | Price agreements | all, get |
| [Rapportages](services/rapportages.md) | Reports | getKolommenbalans, getPeriodebalans |
| [Vatratedefinitions](services/vatratedefinitions.md) | VAT rate definitions | all, get |
| [Vatrates](services/vatrates.md) | VAT rates | all, get |
| [Verkoopboekingen](services/verkoopboekingen.md) | Sales bookings | all, get, create, update, delete |
| [Verkooporders](services/verkooporders.md) | Sales orders | all, get, create, update, delete, procesStatus |
| [Verkoopordersjablonen](services/verkoopordersjablonen.md) | Sales order templates | all, get, create, update |

## Common Patterns

### List Resources (Collection)

```php
// Get all items
$items = $client->serviceName()->all();

// With OData filtering
$items = $client->artikelen()->all(
    filter: "naam eq 'Product A'",
    skip: 0,
    top: 50
);
```

### Get Single Resource

```php
$item = $client->serviceName()->get($id);
```

### Create Resource

```php
$newItem = new ItemModel();
$newItem->requiredField = 'value';  // Required fields must be set
$newItem->optionalField = 'value';  // Optional

$created = $client->serviceName()->create($newItem);
```

### Update Resource

```php
$item = $client->serviceName()->get($id);
$item->naam = 'Updated Name';

$updated = $client->serviceName()->update($id, $item);
```

### Delete Resource

```php
$client->serviceName()->delete($id);  // Returns void
```

### Custom Fields

```php
// Get custom fields
$customFields = $client->artikelen()->getCustomFields($id);

// Update custom fields
$client->artikelen()->updateCustomFields($id, $updatedFields);
```

## Error Handling

See [Error Handling Guide](error-handling.md) for comprehensive error handling strategies.

```php
use SpiderDead\SnelStartApi\Exception\UnauthorizedException;
use SpiderDead\SnelStartApi\Exception\RateLimitedException;
use SpiderDead\SnelStartApi\Exception\NotFoundException;

try {
    $artikel = $client->artikelen()->get($id);
} catch (UnauthorizedException $e) {
    // Invalid API key - handle authentication
} catch (RateLimitedException $e) {
    // Rate limit exceeded - implement retry with backoff
    $retryAfter = $e->getHeaders()['Retry-After'][0] ?? 60;
} catch (NotFoundException $e) {
    // Resource not found
}
```

## Authentication

The SDK supports two authentication modes:

```php
use SpiderDead\SnelStartApi\Auth\AuthMode;

// Header-based (recommended)
$config = new ClientConfig(
    apiKey: 'your-key',
    authMode: AuthMode::Header
);

// Query parameter-based
$config = new ClientConfig(
    apiKey: 'your-key',
    authMode: AuthMode::Query
);
```

## Additional Resources

- [Quick Start Guide](quick-start.md)
- [Error Handling Guide](error-handling.md)
- [Service Reference](services/)
- [Model Reference](models.md)

## Requirements

- PHP 8.1 or higher
- PSR-7 HTTP message implementation
- PSR-17 HTTP factory implementation
- PSR-18 HTTP client implementation

## Installation

```bash
composer require spiderdead/snelstart-api
```

## Support

For issues and questions, please open an issue on the GitHub repository.
