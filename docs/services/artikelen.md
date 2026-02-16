# Artikelen Service

Manage products and articles in SnelStart.

## Available Methods

### `all()` - List All Articles

Retrieve a list of all articles with optional OData filtering.

```php
$artikelen = $client->artikelen()->all(
    filter: "naam eq 'Product A'",  // Optional OData filter
    skip: 0,                         // Optional: skip N records
    top: 50,                         // Optional: return max N records
    aantal: 10,                      // Optional: aantal parameter
    relatieId: $relatieId           // Optional: filter by relation
);

// Returns: ArtikelQueryModel[]
foreach ($artikelen as $artikel) {
    echo $artikel->naam . " - €" . $artikel->verkoopprijs . "\n";
}
```

**Parameters:**
- `$filter` (string|null): OData filter expression
- `$skip` (int|null): Number of records to skip
- `$top` (int|null): Maximum number of records to return
- `$aantal` (int|null): Number of items
- `$relatieId` (string|null): Filter by relation ID

**Returns:** `array<int, ArtikelQueryModel>`

---

### `get()` - Get Single Article

Retrieve a specific article by ID.

```php
$artikel = $client->artikelen()->get($artikelId);

echo "Article: {$artikel->naam}\n";
echo "Price: €{$artikel->verkoopprijs}\n";
echo "Stock: {$artikel->voorraad}\n";
```

**Parameters:**
- `$id` (string): Article ID (UUID)
- `$aantal` (int|null): Optional aantal parameter
- `$relatieId` (string|null): Optional relation ID

**Returns:** `ArtikelQueryModel`

---

### `create()` - Create New Article

Create a new article.

```php
use SpiderDead\SnelStartApi\Model\ArtikelModel;

$artikel = new ArtikelModel();
$artikel->naam = 'New Product';
$artikel->artikelcode = 'PROD-001';
$artikel->verkoopprijs = 99.99;
$artikel->isHoofdartikel = true;

$created = $client->artikelen()->create($artikel);
echo "Created article with ID: {$created->id}\n";
```

**Parameters:**
- `$body` (ArtikelModel|null): Article data

**Returns:** `ArtikelModel`

---

### `update()` - Update Article

Update an existing article.

```php
$artikel = $client->artikelen()->get($artikelId);
$artikel->verkoopprijs = 109.99;  // Update price
$artikel->naam = 'Updated Product Name';

$updated = $client->artikelen()->update($artikelId, $artikel);
```

**Parameters:**
- `$id` (string): Article ID
- `$body` (ArtikelModel|null): Updated article data

**Returns:** `ArtikelModel`

---

### `delete()` - Delete Article

Delete an article.

```php
$client->artikelen()->delete($artikelId);
// Returns void - no return value
```

**Parameters:**
- `$id` (string): Article ID

**Returns:** `void`

---

### `getCustomFields()` - Get Custom Fields

Retrieve custom field definitions for an article.

```php
$customFields = $client->artikelen()->getCustomFields($artikelId);

foreach ($customFields as $field) {
    echo "Field: {$field->name} = {$field->value}\n";
}
```

**Parameters:**
- `$id` (string): Article ID

**Returns:** `array<int, CustomFieldDto>`

---

### `updateCustomFields()` - Update Custom Fields

Update custom field values for an article.

```php
use SpiderDead\SnelStartApi\Model\UpdatedCustomFieldModel;

$updatedFields = [];
// Build updated fields array
// ...

$result = $client->artikelen()->updateCustomFields($artikelId, $updatedFields);
```

**Parameters:**
- `$id` (string): Article ID
- `$body` (array|null): Array of UpdatedCustomFieldModel

**Returns:** `array<int, CustomFieldDto>`

---

### `allPrijsafspraken()` - List Price Agreements

Retrieve all price agreements for articles.

```php
$prijsafspraken = $client->artikelen()->allPrijsafspraken(
    filter: "artikelId eq '{$artikelId}'",
    skip: 0,
    top: 100
);

foreach ($prijsafspraken as $afspraak) {
    echo "Price: €{$afspraak->prijs} for {$afspraak->aantal} units\n";
}
```

**Parameters:**
- `$filter` (string|null): OData filter
- `$skip` (int|null): Skip N records
- `$top` (int|null): Max N records

**Returns:** `array<int, ArtikelPrijsAfsprakenModel>`

---

## Common Use Cases

### Search Articles

```php
// Find articles by name
$results = $client->artikelen()->all(
    filter: "contains(naam, 'laptop')",
    top: 20
);

// Find articles by code
$results = $client->artikelen()->all(
    filter: "artikelcode eq 'PROD-001'"
);
```

### Update Stock and Prices

```php
$artikel = $client->artikelen()->get($id);
$artikel->voorraad = 100;
$artikel->verkoopprijs = 149.99;
$artikel->inkoopprijs = 89.99;

$client->artikelen()->update($id, $artikel);
```

### Manage Custom Fields

```php
// Get current custom fields
$fields = $client->artikelen()->getCustomFields($id);

// Update custom fields
$updatedFields = [/* your updates */];
$client->artikelen()->updateCustomFields($id, $updatedFields);
```

## Related Services

- [Prijsafspraken](prijsafspraken.md) - Price agreements
- [Artikelomzetgroepen](artikelomzetgroepen.md) - Revenue groups
- [Relaties](relaties.md) - Customer relations

## Model Reference

**Main Models:**
- `ArtikelModel` - Full article data (create/update)
- `ArtikelQueryModel` - Article query result (read)
- `ArtikelIdentifierModel` - Article reference
- `ArtikelPrijsAfsprakenModel` - Price agreement data
- `CustomFieldDto` - Custom field definition

See [Models Reference](../models.md) for complete model documentation.
