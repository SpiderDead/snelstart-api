# Relaties Service

Manage customers and suppliers (relations) in SnelStart.

## Available Methods

### `all()` - List All Relations

Retrieve a list of all relations with optional filtering.

```php
$relaties = $client->relaties()->all(
    filter: "naam eq 'ACME Corp'",
    skip: 0,
    top: 100
);

foreach ($relaties as $relatie) {
    echo "{$relatie->naam} - {$relatie->email}\n";
}
```

**Parameters:**
- `$filter` (string|null): OData filter expression
- `$skip` (int|null): Number of records to skip
- `$top` (int|null): Maximum number of records

**Returns:** `array<int, RelatieModel>`

---

### `get()` - Get Single Relation

Retrieve a specific relation by ID.

```php
$relatie = $client->relaties()->get($relatieId);

echo "Name: {$relatie->naam}\n";
echo "Email: {$relatie->email}\n";
echo "Phone: {$relatie->telefoon}\n";
echo "IBAN: {$relatie->iban}\n";
```

**Parameters:**
- `$id` (string): Relation ID (UUID)

**Returns:** `RelatieModel`

---

### `create()` - Create New Relation

Create a new customer or supplier.

```php
use SpiderDead\SnelStartApi\Model\RelatieWriteModel;
use SpiderDead\SnelStartApi\Model\AdresModel;

$relatie = new RelatieWriteModel();
$relatie->naam = 'ACME Corporation';
$relatie->email = 'info@acme.com';
$relatie->telefoon = '+31 20 1234567';
$relatie->relatiesoort = ['Klant']; // 'Klant' or 'Leverancier'

// Add address
$adres = new AdresModel();
$adres->straat = 'Main Street';
$adres->huisnummer = '123';
$adres->postcode = '1234 AB';
$adres->plaats = 'Amsterdam';
$adres->land = 'Nederland';
$relatie->vestigingsAdres = $adres;

$created = $client->relaties()->create($relatie);
echo "Created relation with ID: {$created->id}\n";
```

**Parameters:**
- `$body` (RelatieWriteModel|null): Relation data

**Returns:** `RelatieWriteModel`

---

### `update()` - Update Relation

Update an existing relation.

```php
$relatie = $client->relaties()->get($relatieId);
$relatie->email = 'newemail@acme.com';
$relatie->telefoon = '+31 20 9999999';

$updated = $client->relaties()->update($relatieId, $relatie);
```

**Parameters:**
- `$id` (string): Relation ID
- `$body` (RelatieWriteModel|null): Updated relation data

**Returns:** `RelatieWriteModel`

---

### `delete()` - Delete Relation

Delete a relation.

```php
$client->relaties()->delete($relatieId);
```

**Parameters:**
- `$id` (string): Relation ID

**Returns:** `void`

---

### `getCustomFields()` - Get Custom Fields

Retrieve custom fields for a relation.

```php
$customFields = $client->relaties()->getCustomFields($relatieId);
```

**Parameters:**
- `$id` (string): Relation ID

**Returns:** `RelatieCustomFieldsModel`

---

### `updateCustomFields()` - Update Custom Fields

Update custom fields for a relation.

```php
use SpiderDead\SnelStartApi\Model\RelatieUpdatedCustomFieldsModel;

$updatedFields = new RelatieUpdatedCustomFieldsModel();
// Set custom field values
// ...

$client->relaties()->updateCustomFields($relatieId, $updatedFields);
```

**Parameters:**
- `$id` (string): Relation ID
- `$body` (RelatieUpdatedCustomFieldsModel|null): Updated custom fields

**Returns:** `RelatieCustomFieldsModel`

---

### `getDoorlopendeincassomachtigingen()` - Get Direct Debit Mandates

Retrieve direct debit mandates for a relation.

```php
$mandates = $client->relaties()->getDoorlopendeincassomachtigingen($relatieId);

foreach ($mandates as $mandate) {
    echo "Mandate: {$mandate->kenmerk}\n";
}
```

**Parameters:**
- `$id` (string): Relation ID

**Returns:** `array<int, DoorlopendeIncassoMachtigingModel>`

---

### `getInkoopboekingen()` - Get Purchase Bookings

Retrieve purchase bookings for a relation.

```php
$inkoopboekingen = $client->relaties()->getInkoopboekingen($relatieId);
```

**Parameters:**
- `$id` (string): Relation ID

**Returns:** `array<int, InkoopboekingModel>`

---

### `getVerkoopboekingen()` - Get Sales Bookings

Retrieve sales bookings for a relation.

```php
$verkoopboekingen = $client->relaties()->getVerkoopboekingen($relatieId);
```

**Parameters:**
- `$id` (string): Relation ID

**Returns:** `array<int, VerkoopBoekingModel>`

---

## Common Use Cases

### Create a New Customer

```php
use SpiderDead\SnelStartApi\Model\RelatieWriteModel;
use SpiderDead\SnelStartApi\Model\AdresModel;

$customer = new RelatieWriteModel();
$customer->naam = 'New Customer B.V.';
$customer->email = 'contact@customer.nl';
$customer->telefoon = '+31 20 1234567';
$customer->relatiesoort = ['Klant'];
$customer->kvkNummer = '12345678';
$customer->btwNummer = 'NL123456789B01';

// Add billing address
$address = new AdresModel();
$address->straat = 'Herengracht';
$address->huisnummer = '1';
$address->postcode = '1015 AB';
$address->plaats = 'Amsterdam';
$address->land = 'Nederland';
$customer->vestigingsAdres = $address;

$created = $client->relaties()->create($customer);
```

### Search Relations

```php
// Find by name
$results = $client->relaties()->all(
    filter: "contains(naam, 'ACME')"
);

// Find customers only
$customers = $client->relaties()->all(
    filter: "relatiesoort/any(r: r eq 'Klant')"
);

// Find suppliers only
$suppliers = $client->relaties()->all(
    filter: "relatiesoort/any(r: r eq 'Leverancier')"
);
```

### Update Contact Information

```php
$relatie = $client->relaties()->get($id);
$relatie->email = 'newemail@company.com';
$relatie->telefoon = '+31 20 9876543';
$relatie->mobieleTelefoon = '+31 6 12345678';
$relatie->websiteUrl = 'https://www.company.com';

$client->relaties()->update($id, $relatie);
```

### View Related Transactions

```php
// Get all purchase bookings for this supplier
$purchases = $client->relaties()->getInkoopboekingen($supplierId);

// Get all sales bookings for this customer
$sales = $client->relaties()->getVerkoopboekingen($customerId);

// Get direct debit mandates
$mandates = $client->relaties()->getDoorlopendeincassomachtigingen($customerId);
```

## Model Reference

**Main Models:**
- `RelatieModel` - Full relation data (read)
- `RelatieWriteModel` - Relation data for create/update
- `RelatieIdentifierModel` - Relation reference
- `AdresModel` - Address information
- `RelatieCustomFieldsModel` - Custom fields
- `DoorlopendeIncassoMachtigingModel` - Direct debit mandate

## Related Services

- [Verkoopboekingen](verkoopboekingen.md) - Sales bookings
- [Inkoopboekingen](inkoopboekingen.md) - Purchase bookings
- [Verkoopfacturen](verkoopfacturen.md) - Sales invoices
- [Inkoopfacturen](inkoopfacturen.md) - Purchase invoices
