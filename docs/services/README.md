# Service Reference

Complete reference for all 31 services in the SnelStart API SDK.

## Service Categories

### 📦 Products & Inventory
- [**Artikelen**](artikelen.md) - Manage products and articles
- [**Artikelomzetgroepen**](artikelomzetgroepen.md) - Article revenue groups
- [**Actieprijzen**](actieprijzen.md) - Action prices
- [**Prijsafspraken**](prijsafspraken.md) - Price agreements

### 👥 Relations & Customers
- [**Relaties**](relaties.md) - Customer and supplier management

### 💰 Sales
- [**Verkoopfacturen**](verkoopfacturen.md) - Sales invoices
- [**Verkoopboekingen**](verkoopboekingen.md) - Sales bookings
- [**Verkooporders**](verkooporders.md) - Sales orders
- [**Verkoopordersjablonen**](verkoopordersjablonen.md) - Sales order templates
- [**Offertes**](offertes.md) - Quotes and offers

### 🛒 Purchases
- [**Inkoopfacturen**](inkoopfacturen.md) - Purchase invoices
- [**Inkoopboekingen**](inkoopboekingen.md) - Purchase bookings

### 🏦 Banking & Finance
- [**Bankboekingen**](bankboekingen.md) - Bank transactions
- [**Bankafschriftbestanden**](bankafschriftbestanden.md) - Bank statement files
- [**Kasboekingen**](kasboekingen.md) - Cash transactions
- [**Memoriaalboekingen**](memoriaalboekingen.md) - Memorial bookings

### 📊 Accounting
- [**Grootboeken**](grootboeken.md) - General ledger accounts
- [**Grootboekmutaties**](grootboekmutaties.md) - General ledger mutations
- [**Dagboeken**](dagboeken.md) - Journals
- [**Kostenplaatsen**](kostenplaatsen.md) - Cost centers

### 💵 VAT & Tax
- [**Btwaangiftes**](btwaangiftes.md) - VAT returns
- [**Btwtarieven**](btwtarieven.md) - VAT rates
- [**Vatratedefinitions**](vatratedefinitions.md) - VAT rate definitions
- [**Vatrates**](vatrates.md) - Current VAT rates

### 📄 Administration
- [**Documenten**](documenten.md) - Document management
- [**Rapportages**](rapportages.md) - Reports and analytics
- [**CompanyInfo**](companyinfo.md) - Company information
- [**Landen**](landen.md) - Country reference data

### 🔐 System
- [**Authorization**](authorization.md) - Access control
- [**Echo**](echo.md) - API connectivity test

## Common Method Patterns

All services follow consistent RESTful conventions:

### Standard CRUD Operations

```php
// List/Get All
$items = $client->serviceName()->all($filter, $skip, $top);

// Get Single
$item = $client->serviceName()->get($id);

// Create
$created = $client->serviceName()->create($newItem);

// Update
$updated = $client->serviceName()->update($id, $updatedItem);

// Delete
$client->serviceName()->delete($id);  // Returns void
```

### Sub-Resource Operations

```php
// Get sub-resource
$subItems = $client->serviceName()->getSubResource($id);

// Update sub-resource
$client->serviceName()->updateSubResource($id, $data);
```

### Special Actions

```php
// RPC-style actions
$result = $client->inkoopboekingen()->createFromAttachment($attachment);
$status = $client->inkoopboekingen()->getCreateFromAttachmentStatus($instanceId);
```

## Quick Reference

### Most Commonly Used Services

| Service | Primary Use Case | Key Methods |
|---------|------------------|-------------|
| **Artikelen** | Product catalog | all, get, create, update |
| **Relaties** | Customer/supplier DB | all, get, create, update |
| **Verkoopfacturen** | Sales invoicing | all, get, create |
| **Inkoopfacturen** | Purchase invoicing | all, get |
| **Bankboekingen** | Bank reconciliation | all, get, create |
| **Grootboeken** | Chart of accounts | all, get |

### Read-Only Services

These services only support read operations:

- **Actieprijzen** - Action prices (read-only)
- **Btwtarieven** - VAT rates (read-only)
- **Landen** - Countries (read-only)
- **Rapportages** - Reports (read-only)

### Services with Special Operations

- **Inkoopboekingen** - `createFromAttachment()` - Import from file
- **Btwaangiftes** - `updateExternAangeven()` - External VAT filing
- **Verkoopfacturen** - `getUbl()` - Get UBL format
- **Verkooporders** - `updateProcesStatus()` - Update order status

## Service Naming

Service names are derived from the API resource names:

| Resource Path | Service Name | Accessor |
|--------------|--------------|----------|
| `/artikelen` | ArtikelenService | `$client->artikelen()` |
| `/relaties` | RelatiesService | `$client->relaties()` |
| `/verkoopfacturen` | VerkoopfacturenService | `$client->verkoopfacturen()` |
| `/grootboeken` | GrootboekenService | `$client->grootboeken()` |

## Getting Help

- [Quick Start Guide](../quick-start.md)
- [Error Handling Guide](../error-handling.md)
- [Model Reference](../models.md)
- [Main Documentation](../README.md)
