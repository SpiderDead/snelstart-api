# Quick Start Guide

Get started with the SnelStart API SDK in minutes.

## Installation

```bash
composer require spiderdead/snelstart-api
```

This will automatically install all dependencies including:
- `symfony/http-client` - HTTP client implementation
- `nyholm/psr7` - PSR-7 message factory
- `symfony/serializer` - Object serialization

## Requirements

- PHP 8.1 or higher
- All dependencies are installed automatically via Composer

## Basic Setup

### Simple Setup (Recommended)

```php
<?php

require 'vendor/autoload.php';

use SpiderDead\SnelStartApi\SnelStartClient;
use SpiderDead\SnelStartApi\Config\ClientConfig;
use SpiderDead\SnelStartApi\Auth\AuthMode;

// Configure the SDK
$config = new ClientConfig(
    apiKey: 'your-snelstart-api-key',
    authMode: AuthMode::Header
);

// Create the client with defaults
$client = SnelStartClient::create($config);
```

That's it! The SDK will automatically use Symfony HTTP Client and Nyholm PSR-7 factory.

### Advanced Setup (Custom HTTP Client)

If you want to use your own HTTP client:

```php
use Nyholm\Psr7\Factory\Psr17Factory;
use Symfony\Component\HttpClient\Psr18Client;

// Create HTTP client and factories
$httpClient = new Psr18Client();
$factory = new Psr17Factory();

// Create the client with custom dependencies
$client = new SnelStartClient(
    $httpClient,
    $factory,
    $factory,
    $config
);
```

### 2. Make Your First API Call

```php
// List all articles
$artikelen = $client->artikelen()->all();

foreach ($artikelen as $artikel) {
    echo "{$artikel->naam} - €{$artikel->verkoopprijs}\n";
}
```

## Common Operations

### Working with Articles (Products)

```php
// Get all articles
$artikelen = $client->artikelen()->all();

// Get specific article
$artikel = $client->artikelen()->get($artikelId);

// Create new article
use SpiderDead\SnelStartApi\Model\ArtikelModel;

$newArtikel = new ArtikelModel();
$newArtikel->naam = 'Laptop Dell XPS';
$newArtikel->artikelcode = 'LAP-001';
$newArtikel->verkoopprijs = 1299.99;

$created = $client->artikelen()->create($newArtikel);

// Update article
$artikel->verkoopprijs = 1199.99;
$client->artikelen()->update($artikelId, $artikel);

// Delete article
$client->artikelen()->delete($artikelId);
```

### Working with Relations (Customers/Suppliers)

```php
// Get all customers
$customers = $client->relaties()->all(
    filter: "relatiesoort/any(r: r eq 'Klant')"
);

// Create new customer
use SpiderDead\SnelStartApi\Model\RelatieWriteModel;
use SpiderDead\SnelStartApi\Model\AdresModel;

$customer = new RelatieWriteModel();
$customer->naam = 'ACME Corp';
$customer->email = 'info@acme.com';
$customer->relatiesoort = ['Klant'];

$address = new AdresModel();
$address->straat = 'Herengracht';
$address->huisnummer = '1';
$address->postcode = '1015 AB';
$address->plaats = 'Amsterdam';
$customer->vestigingsAdres = $address;

$created = $client->relaties()->create($customer);
```

### Working with Sales Invoices

```php
// Get all invoices
$invoices = $client->verkoopfacturen()->all();

// Get specific invoice
$invoice = $client->verkoopfacturen()->get($invoiceId);

// Get invoice as UBL
$ublData = $client->verkoopfacturen()->getUbl($invoiceId);
```

### Working with Bookings

```php
// Bank bookings
$bankBookings = $client->bankboekingen()->all();
$booking = $client->bankboekingen()->get($bookingId);

// Purchase bookings
$purchases = $client->inkoopboekingen()->all();

// Sales bookings
$sales = $client->verkoopboekingen()->all();
```

## OData Filtering

The SDK supports OData query syntax for filtering:

```php
// Equals
$client->artikelen()->all(filter: "naam eq 'Product A'");

// Contains (case-insensitive search)
$client->relaties()->all(filter: "contains(naam, 'acme')");

// Greater than / Less than
$client->artikelen()->all(filter: "verkoopprijs gt 100");
$client->artikelen()->all(filter: "voorraad lt 10");

// And / Or
$client->artikelen()->all(filter: "verkoopprijs gt 50 and voorraad gt 0");

// Pagination
$client->artikelen()->all(
    skip: 0,    // Start at record 0
    top: 50     // Return max 50 records
);
```

## Error Handling

```php
use SpiderDead\SnelStartApi\Exception\NotFoundException;
use SpiderDead\SnelStartApi\Exception\UnauthorizedException;
use SpiderDead\SnelStartApi\Exception\RateLimitedException;

try {
    $artikel = $client->artikelen()->get($id);
} catch (UnauthorizedException $e) {
    echo "Authentication failed. Check your API key.\n";
} catch (NotFoundException $e) {
    echo "Article not found.\n";
} catch (RateLimitedException $e) {
    $retryAfter = $e->getHeaders()['Retry-After'][0] ?? 60;
    echo "Rate limited. Retry after {$retryAfter} seconds.\n";
}
```

See [Error Handling Guide](error-handling.md) for more details.

## Advanced Configuration

### Custom Serializer

```php
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

$serializer = new Serializer(
    [new ObjectNormalizer()],
    [new JsonEncoder()]
);

$client = new SnelStartClient(
    $httpClient,
    $factory,
    $factory,
    $config,
    $serializer  // Custom serializer
);
```

### Custom User Agent

```php
$config = new ClientConfig(
    apiKey: 'your-key',
    userAgent: 'MyApp/1.0 (contact@myapp.com)'
);
```

### Access Transport Directly

```php
// Low-level access to HTTP transport
$transport = $client->transport();

// Execute custom operation
$result = $transport->execute(
    operationId: 'custom-operation-id',
    pathParams: ['id' => $id],
    queryParams: ['filter' => $filter]
);
```

## Next Steps

- [Browse Service Documentation](services/) - Detailed reference for each service
- [Error Handling Guide](error-handling.md) - Comprehensive error handling strategies
- [Model Reference](models.md) - All available models and their properties
- [API Reference](https://www.snelstart.nl/api) - Official SnelStart API documentation

## Common Questions

### How do I handle pagination?

```php
$pageSize = 50;
$page = 0;

do {
    $items = $client->artikelen()->all(
        skip: $page * $pageSize,
        top: $pageSize
    );
    
    foreach ($items as $item) {
        // Process item
    }
    
    $page++;
} while (count($items) === $pageSize);
```

### How do I filter by date?

```php
use DateTime;

$date = new DateTime('2024-01-01');
$filter = sprintf("modifiedOn gt %s", $date->format(DateTime::ATOM));

$recentArticles = $client->artikelen()->all(filter: $filter);
```

### How do I handle required fields?

```php
// Required fields MUST be set (they're not nullable)
$boeking = new BankboekingModel();

// These are required - PHP will error if you don't set them
$boeking->datum = new DateTimeImmutable();
$boeking->bedragOntvangen = 100.00;
$boeking->bedragUitgegeven = 0.00;
$boeking->dagboek = $dagboekId;

// Optional fields can be left as null
$boeking->omschrijving = 'Payment received';  // Optional
```

## Examples Repository

See the `/examples` directory for complete working examples.
