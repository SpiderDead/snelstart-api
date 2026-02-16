# SnelStart API SDK - Documentation Index

Welcome to the SnelStart API SDK documentation!

## 🚀 Getting Started

New to the SDK? Start here:

1. **[Quick Start Guide](quick-start.md)** - Get up and running in 5 minutes
2. **[README](README.md)** - Overview and installation
3. **[Error Handling](error-handling.md)** - Learn to handle API errors properly

## 📚 Core Documentation

### Essential Guides

- **[Quick Start Guide](quick-start.md)** - Installation, basic setup, first API call
- **[Error Handling Guide](error-handling.md)** - Exception types, retry strategies, best practices
- **[Model Reference](models.md)** - Understanding models, required fields, type system
- **[All Services Overview](all-services.md)** - Complete service list with quick reference

### Service Documentation

#### Most Popular Services
- **[Artikelen](services/artikelen.md)** - Product management (8 methods)
- **[Relaties](services/relaties.md)** - Customer/supplier management (10 methods)
- **[Verkoopfacturen](services/verkoopfacturen.md)** - Sales invoices (3 methods)
- **[Inkoopboekingen](services/inkoopboekingen.md)** - Purchase bookings (7 methods)

#### Complete Service Index
- **[Services Directory](services/README.md)** - All 31 services organized by category

## 📖 Documentation Structure

```
docs/
├── README.md                  # Main overview
├── index.md                   # This file - documentation index
├── quick-start.md             # Getting started guide
├── error-handling.md          # Error handling strategies
├── models.md                  # Model reference
├── all-services.md            # All services quick reference
└── services/
    ├── README.md              # Service index by category
    ├── artikelen.md           # Product management
    ├── relaties.md            # Customer/supplier management
    ├── verkoopfacturen.md     # Sales invoices
    └── inkoopboekingen.md     # Purchase bookings
```

## 🎯 Quick Navigation

### By Use Case

**I want to...**

- **Manage products** → [Artikelen Service](services/artikelen.md)
- **Manage customers** → [Relaties Service](services/relaties.md)
- **Process invoices** → [Verkoopfacturen](services/verkoopfacturen.md) | [Inkoopfacturen](services/inkoopfacturen.md)
- **Handle bank transactions** → [Bankboekingen](services/README.md#banking--finance)
- **File VAT returns** → [Btwaangiftes](services/README.md#vat--tax)
- **Generate reports** → [Rapportages](services/README.md#administration)
- **Upload invoices** → [Inkoopboekingen](services/inkoopboekingen.md#createfromattachment---create-from-file)

### By Task

**Common Tasks:**

1. **List resources** → [Quick Start: Common Operations](quick-start.md#common-operations)
2. **Create/update resources** → [Quick Start: Basic Setup](quick-start.md#basic-setup)
3. **Handle errors** → [Error Handling Guide](error-handling.md)
4. **Filter with OData** → [Quick Start: OData Filtering](quick-start.md#odata-filtering)
5. **Work with required fields** → [Models: Required vs Optional](models.md#required-vs-optional-properties)

## 🔍 Search by Topic

### Authentication
- [Quick Start: Basic Setup](quick-start.md#1-create-the-client)
- [README: Authentication](README.md#authentication)
- [Error Handling: UnauthorizedException](error-handling.md#unauthorizedexception-401)

### Filtering & Pagination
- [Quick Start: OData Filtering](quick-start.md#odata-filtering)
- [README: List Resources](README.md#list-resources-collection)

### Error Handling
- [Error Handling Guide](error-handling.md) - Complete guide
- [Quick Start: Error Handling](quick-start.md#error-handling)
- All 11 exception types documented

### Models & Types
- [Model Reference](models.md) - All model types
- [Models: Required Properties](models.md#required-vs-optional-properties)
- [Models: Type Hints](models.md#type-hints)

## 💡 Examples

### Quick Examples

**List all products:**
```php
$artikelen = $client->artikelen()->all();
```

**Get single product:**
```php
$artikel = $client->artikelen()->get($id);
```

**Create customer:**
```php
$customer = new RelatieWriteModel();
$customer->naam = 'ACME Corp';
$created = $client->relaties()->create($customer);
```

**Handle errors:**
```php
try {
    $result = $client->artikelen()->get($id);
} catch (NotFoundException $e) {
    echo "Not found\n";
}
```

More examples in [Quick Start Guide](quick-start.md).

## 📊 SDK Statistics

- **98 model classes** - Clean, readable names
- **31 service classes** - Organized by domain
- **96 API operations** - Full API coverage
- **11 exception types** - Comprehensive error handling
- **Type-safe** - Required/optional properties enforced
- **PSR-12 compliant** - Professional code quality

## 🛠️ Advanced Topics

### Custom Configuration
- [Quick Start: Advanced Configuration](quick-start.md#advanced-configuration)

### Direct Transport Access
- [Quick Start: Access Transport Directly](quick-start.md#access-transport-directly)

### Retry Logic
- [Error Handling: Pattern 2 - Retry Logic](error-handling.md#pattern-2-retry-logic)

### Validation Errors
- [Error Handling: UnprocessableEntityException](error-handling.md#unprocessableentityexception-422)

## 📞 Support & Resources

- **GitHub Repository** - Report issues and contribute
- **Official SnelStart API** - [API Documentation](https://www.snelstart.nl/api)
- **Composer Package** - `composer require spiderdead/snelstart-api`

## 🗺️ Documentation Map

```
Start Here
    ↓
Quick Start Guide ──→ Make your first API call
    ↓
Choose your service:
    ├── Products? → Artikelen Service
    ├── Customers? → Relaties Service
    ├── Invoices? → Verkoopfacturen Service
    └── Banking? → Bankboekingen Service
    ↓
Learn error handling → Error Handling Guide
    ↓
Deep dive → Model Reference & All Services
```

## 📝 Documentation Version

This documentation is for SDK version generated from the SnelStart B2B API v2 OpenAPI specification.

Last updated: February 2026
