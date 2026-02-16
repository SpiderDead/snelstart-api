# All Services Reference

Complete list of all 31 services available in the SnelStart API SDK.

## Quick Reference Table

| Service | Methods | Primary Use Case |
|---------|---------|------------------|
| **Actieprijzen** | 1 | Action prices (promotional pricing) |
| **Artikelen** | 8 | Product catalog management |
| **Artikelomzetgroepen** | 2 | Article revenue group classification |
| **Authorization** | 1 | Check user access permissions |
| **Bankafschriftbestanden** | 1 | Upload bank statement files |
| **Bankboekingen** | 5 | Bank transaction management |
| **Btwaangiftes** | 3 | VAT return filing |
| **Btwtarieven** | 1 | VAT rate lookup |
| **CompanyInfo** | 2 | Company information |
| **Dagboeken** | 1 | Journal reference |
| **Documenten** | 5 | Document management |
| **Echo** | 1 | API connectivity test |
| **Grootboeken** | 3 | General ledger accounts |
| **Grootboekmutaties** | 2 | Ledger mutations/transactions |
| **Inkoopboekingen** | 7 | Purchase bookings (with file upload) |
| **Inkoopfacturen** | 1 | Purchase invoice lookup |
| **Kasboekingen** | 5 | Cash transaction management |
| **Kostenplaatsen** | 5 | Cost center management |
| **Landen** | 2 | Country reference data |
| **Memoriaalboekingen** | 4 | Memorial booking management |
| **Offertes** | 5 | Quote/offer management |
| **Prijsafspraken** | 1 | Price agreement lookup |
| **Rapportages** | 2 | Financial reports (balance sheets) |
| **Relaties** | 10 | Customer/supplier management |
| **Vatratedefinitions** | 1 | VAT rate definitions |
| **Vatrates** | 2 | Current VAT rates |
| **Verkoopboekingen** | 4 | Sales booking management |
| **Verkoopfacturen** | 3 | Sales invoice lookup & UBL export |
| **Verkooporders** | 6 | Sales order management |
| **Verkoopordersjablonen** | 2 | Sales order templates |

## Service Method Patterns

### Read-Only Services (List/Get Only)

**Actieprijzen**
```php
$prices = $client->actieprijzen()->all();
```

**Btwtarieven**
```php
$rates = $client->btwtarieven()->all();
```

**Inkoopfacturen**
```php
$invoices = $client->inkoopfacturen()->all();
```

**Prijsafspraken**
```php
$agreements = $client->prijsafspraken()->all();
```

**Vatratedefinitions**
```php
$definitions = $client->vatratedefinitions()->all();
```

---

### Full CRUD Services (Create, Read, Update, Delete)

**Artikelen**
```php
$items = $client->artikelen()->all();
$item = $client->artikelen()->get($id);
$created = $client->artikelen()->create($newItem);
$updated = $client->artikelen()->update($id, $data);
$client->artikelen()->delete($id);
```

**Similar services:** Relaties, Bankboekingen, Kasboekingen, Kostenplaatsen, Offertes, Verkooporders, Documenten

---

### Services with Sub-Resources

**Artikelen** - Custom fields and price agreements
```php
$client->artikelen()->getCustomFields($id);
$client->artikelen()->updateCustomFields($id, $fields);
$client->artikelen()->allPrijsafspraken();
```

**Relaties** - Custom fields and related bookings
```php
$client->relaties()->getCustomFields($id);
$client->relaties()->updateCustomFields($id, $fields);
$client->relaties()->getDoorlopendeincassomachtigingen($id);
$client->relaties()->getInkoopboekingen($id);
$client->relaties()->getVerkoopboekingen($id);
```

---

### Services with Special Actions

**Inkoopboekingen** - File upload processing
```php
$client->inkoopboekingen()->createFromAttachment($file);
$client->inkoopboekingen()->getCreateFromAttachmentStatus($instanceId);
$client->inkoopboekingen()->createUbl($ublContent);
```

**Btwaangiftes** - External VAT filing
```php
$client->btwaangiftes()->updateExternAangeven($id, $model);
```

**Verkoopfacturen** - UBL export
```php
$client->verkoopfacturen()->getUbl($id);
```

**Verkooporders** - Process status
```php
$client->verkooporders()->updateProcesStatus($id, $statusUpdate);
```

---

## Service Access Patterns

### Via Client Object

```php
// All services accessed via client
$client->artikelen()->all();
$client->relaties()->get($id);
$client->verkoopfacturen()->all();
```

### Service Naming Convention

Service accessor names are the resource name in lowercase:

| Resource | Accessor |
|----------|----------|
| `/artikelen` | `$client->artikelen()` |
| `/relaties` | `$client->relaties()` |
| `/verkoopfacturen` | `$client->verkoopfacturen()` |
| `/grootboeken` | `$client->grootboeken()` |

---

## Method Naming Conventions

Methods follow RESTful conventions:

| HTTP Method | Path Pattern | Method Name | Example |
|-------------|--------------|-------------|---------|
| GET | `/{resource}` | `all()` | `all($filter, $skip, $top)` |
| GET | `/{resource}/{id}` | `get($id)` | `get($id)` |
| POST | `/{resource}` | `create()` | `create($model)` |
| PUT | `/{resource}/{id}` | `update($id)` | `update($id, $model)` |
| DELETE | `/{resource}/{id}` | `delete($id)` | `delete($id)` |
| GET | `/{resource}/{id}/{sub}` | `get{Sub}($id)` | `getCustomFields($id)` |
| PUT | `/{resource}/{id}/{sub}` | `update{Sub}($id)` | `updateCustomFields($id, $data)` |
| GET | `/{resource}/{sub}` | `all{Sub}()` | `allPrijsafspraken()` |
| POST | `/{resource}/{Action}` | `{action}()` | `createFromAttachment($file)` |

---

## Service Details by Category

### 📦 Product & Inventory Management

**Artikelen** (8 methods)
- Complete product lifecycle management
- Custom fields support
- Price agreement management
- [Full Documentation →](artikelen.md)

**Artikelomzetgroepen** (2 methods)
- Revenue group classification
- Product categorization

**Actieprijzen** (1 method)
- Promotional pricing lookup

**Prijsafspraken** (1 method)
- Customer-specific pricing

---

### 👥 Relation Management

**Relaties** (10 methods)
- Customer and supplier management
- Address management
- Custom fields
- Related transaction lookup
- Direct debit mandates
- [Full Documentation →](relaties.md)

---

### 💰 Sales Management

**Verkoopfacturen** (3 methods)
- Invoice lookup and export
- UBL format support
- [Full Documentation →](verkoopfacturen.md)

**Verkoopboekingen** (4 methods)
- Sales transaction management
- Complete CRUD operations

**Verkooporders** (6 methods)
- Order management
- Order status tracking

**Verkoopordersjablonen** (2 methods)
- Order template management

**Offertes** (5 methods)
- Quote/offer management
- Complete CRUD operations

---

### 🛒 Purchase Management

**Inkoopboekingen** (7 methods)
- Purchase transaction management
- Automated processing from files
- UBL import support
- [Full Documentation →](inkoopboekingen.md)

**Inkoopfacturen** (1 method)
- Purchase invoice lookup

---

### 🏦 Financial Transactions

**Bankboekingen** (5 methods)
- Bank transaction management
- Complete CRUD operations

**Kasboekingen** (5 methods)
- Cash transaction management
- Complete CRUD operations

**Memoriaalboekingen** (4 methods)
- Memorial booking management

**Bankafschriftbestanden** (1 method)
- Bank statement file upload

---

### 📊 Accounting & Reporting

**Grootboeken** (3 methods)
- General ledger account management

**Grootboekmutaties** (2 methods)
- Ledger transaction lookup

**Dagboeken** (1 method)
- Journal reference

**Kostenplaatsen** (5 methods)
- Cost center management

**Rapportages** (2 methods)
- Balance sheet reports
- Columnar and period balance

---

### 💵 VAT & Tax

**Btwaangiftes** (3 methods)
- VAT return management
- External filing support

**Btwtarieven** (1 method)
- VAT rate lookup

**Vatratedefinitions** (1 method)
- VAT rate definitions

**Vatrates** (2 methods)
- Current VAT rate lookup

---

### 📄 Documents & Reference

**Documenten** (5 methods)
- Document storage and retrieval
- Complete CRUD operations

**CompanyInfo** (2 methods)
- Company details and settings

**Landen** (2 methods)
- Country reference data

---

### 🔐 System Services

**Authorization** (1 method)
- Check user access permissions

**Echo** (1 method)
- Test API connectivity

---

## Getting Started

1. Start with [Quick Start Guide](../quick-start.md)
2. Browse service documentation:
   - [Artikelen](artikelen.md) - Product management
   - [Relaties](relaties.md) - Customer/supplier management
   - [Verkoopfacturen](verkoopfacturen.md) - Sales invoices
3. Learn [Error Handling](../error-handling.md)

## See Also

- [Quick Start Guide](../quick-start.md)
- [Error Handling Guide](../error-handling.md)
- [Model Reference](../models.md)
- [Main Documentation](../README.md)
