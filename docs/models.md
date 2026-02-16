# Model Reference

All model classes in the SnelStart API SDK.

## Model Categories

The SDK includes 98 model classes organized by domain:

### Product Models
- `ArtikelModel` - Full article/product data
- `ArtikelQueryModel` - Article query result
- `ArtikelIdentifierModel` - Article reference
- `ArtikelOmzetGroepModel` - Revenue group
- `ArtikelPrijsAfsprakenModel` - Price agreements
- `ActieprijzenModel` - Action price
- `PrijsModel` - Price definition
- `PrijsAfspraakModel` - Price agreement detail

### Relation Models
- `RelatieModel` - Full relation data (read)
- `RelatieWriteModel` - Relation data (write)
- `RelatieIdentifierModel` - Relation reference
- `AdresModel` - Address information
- `EmailVersturenModel` - Email settings

### Invoice Models
- `VerkoopfactuurModel` - Sales invoice
- `InkoopfactuurModel` - Purchase invoice
- `VerkoopOrderModel` - Sales order
- `OfferteModel` - Quote/offer

### Booking Models
- `BankboekingModel` - Bank booking
- `InkoopboekingModel` - Purchase booking
- `VerkoopBoekingModel` - Sales booking
- `KasboekingModel` - Cash booking
- `MemoriaalboekingModel` - Memorial booking

### Accounting Models
- `GrootboekModel` - General ledger account
- `GrootboekMutatieModel` - Ledger mutation
- `DagboekModel` - Journal
- `KostenplaatsModel` - Cost center

### VAT Models
- `BtwAangifteModel` - VAT return
- `BtwTariefModel` - VAT rate
- `BtwBoekingregelModel` - VAT booking line
- `VatRateModel` - VAT rate
- `VatRateDefinitionModel` - VAT rate definition

### Document Models
- `DocumentModel` - Document metadata
- `DocumentContentModel` - Document content
- `DocumentIdentifierModel` - Document reference
- `AttachmentModel` - File attachment
- `UblContentModel` - UBL format content

### Reference Data Models
- `LandModel` - Country
- `CompanyInfoModel` - Company information
- `AdministrationAccessModel` - Authorization info

## Understanding Model Types

The SDK uses different model types for different purposes:

### 1. Full Models (Read)
Used for GET operations - contains all fields including read-only ones.

```php
// Example: ArtikelQueryModel
$artikel = $client->artikelen()->get($id);
echo $artikel->id;           // Read-only UUID
echo $artikel->modifiedOn;   // Read-only timestamp
echo $artikel->naam;         // Editable
```

### 2. Write Models
Used for POST/PUT operations - contains only writable fields.

```php
// Example: RelatieWriteModel
$relatie = new RelatieWriteModel();
$relatie->naam = 'Customer Name';  // No 'id' or 'modifiedOn'

$client->relaties()->create($relatie);
```

### 3. Identifier Models
Lightweight references to other resources.

```php
// Example: ArtikelIdentifierModel
$identifier = new ArtikelIdentifierModel();
$identifier->id = $artikelId;

// Used in relationships
$orderLine->artikel = $identifier;
```

## Required vs Optional Properties

### Required Properties
Must be set before creating/updating. They're **not nullable** and have **no default**.

```php
// BankboekingModel - required properties
$boeking = new BankboekingModel();

// MUST set these (PHP will error if missing):
$boeking->datum = new DateTimeImmutable();        // Required
$boeking->bedragOntvangen = 100.00;               // Required
$boeking->bedragUitgegeven = 0.00;                // Required
$boeking->dagboek = $dagboekIdentifier;           // Required
```

### Optional Properties
Can be left as null. They're **nullable** with **default = null**.

```php
// Optional properties can be omitted
$boeking->omschrijving = 'Payment';  // Optional
$boeking->boekstuk = 'REF-001';      // Optional
// $boeking->markering not set - remains null
```

## Common Model Patterns

### Creating Models with Required Fields

```php
// BankafschriftBestand - all fields required
$bestand = new BankafschriftBestand();
$bestand->name = 'statement.mt940';               // Required
$bestand->base64EncodedContent = base64_encode($content);  // Required

$client->bankafschriftbestanden()->create($bestand);
```

### Working with Nested Models

```php
use SpiderDead\SnelStartApi\Model\RelatieWriteModel;
use SpiderDead\SnelStartApi\Model\AdresModel;

$relatie = new RelatieWriteModel();
$relatie->naam = 'ACME Corp';

// Nested address model
$adres = new AdresModel();
$adres->straat = 'Main Street';
$adres->huisnummer = '1';
$adres->postcode = '1234 AB';
$adres->plaats = 'Amsterdam';

$relatie->vestigingsAdres = $adres;      // Assign nested model
$relatie->correspondentieAdres = $adres;  // Can reuse
```

### Working with Arrays

```php
// Properties that are arrays
$relatie = $client->relaties()->get($id);

// Array of documents
foreach ($relatie->documents as $document) {
    echo $document->naam . "\n";
}

// Array of custom fields
foreach ($relatie->extraVeldenKlant as $field) {
    echo "{$field->naam}: {$field->waarde}\n";
}
```

### Working with Dates

```php
use DateTimeImmutable;

$boeking = new BankboekingModel();
$boeking->datum = new DateTimeImmutable('2024-01-15');

// Or current date
$boeking->datum = new DateTimeImmutable();
```

## Model Naming Conventions

Models follow these naming patterns:

| Pattern | Example | Purpose |
|---------|---------|---------|
| `{Resource}Model` | `ArtikelModel` | Full resource data |
| `{Resource}QueryModel` | `ArtikelQueryModel` | Query result (with metadata) |
| `{Resource}WriteModel` | `RelatieWriteModel` | Data for create/update |
| `{Resource}IdentifierModel` | `DagboekIdentifierModel` | Reference/foreign key |
| `{Action}Model` | `CreateFromAttachmentModel` | Special action result |

## Identifier Models

Identifier models are used to reference other resources:

```php
// Instead of passing full models, use identifiers
$dagboekId = new DagboekIdentifierModel();
$dagboekId->id = $dagboekUuid;

$boeking->dagboek = $dagboekId;  // Reference to journal
```

## Common Properties

Many models share these common properties:

### Audit Fields (Read-Only)
```php
$model->id;          // UUID - unique identifier
$model->uri;         // Resource URI
$model->modifiedOn;  // Last modification timestamp
```

### Common Business Fields
```php
$model->naam;            // Name
$model->omschrijving;    // Description
$model->datum;           // Date
$model->nonactief;       // Inactive/archived flag
```

## Type Hints

All models use strict PHP type hints:

```php
final class BankboekingModel {
    // Scalar types
    public string $id;               // Required string
    public ?string $omschrijving = null;  // Optional string
    public float $bedragOntvangen;   // Required float
    public ?float $krediet = null;   // Optional float
    public bool $markering;          // Required bool
    public ?bool $nonactief = null;  // Optional bool
    
    // Date/time
    public DateTimeImmutable $datum;         // Required
    public ?DateTimeImmutable $modifiedOn = null;  // Optional
    
    // Model references
    public DagboekIdentifierModel $dagboek;  // Required
    public ?RelatieIdentifierModel $relatie = null;  // Optional
    
    // Arrays
    /** @var array<int, BtwBoekingregelModel> */
    public array $btwBoekingsregels;  // Required array
    
    /** @var array<int, DocumentModel>|null */
    public ?array $documents = null;  // Optional array
}
```

## IDE Support

All models have full PHPDoc annotations for IDE autocomplete:

```php
/** @var array<int, ArtikelModel>|null */
public ?array $artikelen = null;

// Your IDE will know that $artikelen is an array of ArtikelModel
foreach ($relatie->documents as $doc) {
    // IDE autocompletes $doc-> with all DocumentModel properties
}
```

## Model Discovery

To find which models are used by a service:

1. Check the service's `use` statements at the top of the file
2. Look at method signatures for parameter and return types
3. See the service-specific documentation

Example:
```php
// In src/Service/ArtikelenService.php
use SpiderDead\SnelStartApi\Model\ArtikelModel;
use SpiderDead\SnelStartApi\Model\ArtikelQueryModel;
// ... these are the models used by this service
```

## Serialization

Models are automatically serialized/deserialized using Symfony Serializer:

```php
// The SDK handles this automatically
$artikel = new ArtikelModel();
$artikel->naam = 'Product';

// SDK serializes to JSON
$created = $client->artikelen()->create($artikel);

// SDK deserializes JSON response back to ArtikelModel
echo $created->id;
```

## Custom Serialization

For property names that don't match PHP conventions:

```php
use Symfony\Component\Serializer\Attribute\SerializedName;

final class SomeModel {
    #[SerializedName('special-property')]
    public ?string $specialProperty = null;
}
```

## See Also

- [Service Reference](services/)
- [Quick Start Guide](quick-start.md)
- [Error Handling](error-handling.md)
