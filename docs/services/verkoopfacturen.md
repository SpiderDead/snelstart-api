# Verkoopfacturen Service

Manage sales invoices in SnelStart.

## Available Methods

### `all()` - List All Sales Invoices

Retrieve all sales invoices with optional filtering.

```php
$invoices = $client->verkoopfacturen()->all(
    filter: "datum gt 2024-01-01T00:00:00Z",
    skip: 0,
    top: 100
);

foreach ($invoices as $invoice) {
    echo "Invoice #{$invoice->factuurnummer} - €{$invoice->totaalbedragInclusiefBtw}\n";
}
```

**Parameters:**
- `$filter` (string|null): OData filter expression
- `$skip` (int|null): Number of records to skip
- `$top` (int|null): Maximum number of records

**Returns:** `array<int, VerkoopfactuurModel>`

**Common Filters:**
```php
// By date range
$filter = "datum gt 2024-01-01T00:00:00Z and datum lt 2024-12-31T23:59:59Z";

// By customer
$filter = "relatie/id eq '{$customerId}'";

// Unpaid invoices
$filter = "openstaand gt 0";

// By minimum amount
$filter = "totaalbedragInclusiefBtw gt 1000";
```

---

### `get()` - Get Single Invoice

Retrieve a specific sales invoice by ID.

```php
$invoice = $client->verkoopfacturen()->get($invoiceId);

echo "Invoice Number: {$invoice->factuurnummer}\n";
echo "Customer: {$invoice->relatie->naam}\n";
echo "Date: {$invoice->datum->format('Y-m-d')}\n";
echo "Total (incl VAT): €{$invoice->totaalbedragInclusiefBtw}\n";
echo "Outstanding: €{$invoice->openstaand}\n";

// Invoice lines
foreach ($invoice->regels as $line) {
    echo "  {$line->omschrijving} - €{$line->totaal}\n";
}
```

**Parameters:**
- `$id` (string): Invoice ID (UUID)

**Returns:** `VerkoopfactuurModel`

---

### `getUbl()` - Get Invoice in UBL Format

Retrieve the invoice in Universal Business Language (UBL) XML format.

```php
$ublData = $client->verkoopfacturen()->getUbl($invoiceId);

// Returns array of mixed data (UBL XML structure)
// Save as XML file
file_put_contents("invoice-{$invoiceId}.xml", $ublData);
```

**Parameters:**
- `$id` (string): Invoice ID

**Returns:** `array<int, mixed>` - UBL XML data structure

**Use Cases:**
- E-invoicing compliance
- Integration with accounting software
- Peppol network distribution
- Automated invoice processing

---

## Common Use Cases

### List Recent Invoices

```php
use DateTimeImmutable;

$startDate = new DateTimeImmutable('-30 days');
$filter = sprintf(
    "datum gt %s",
    $startDate->format(DateTimeImmutable::ATOM)
);

$recentInvoices = $client->verkoopfacturen()->all(
    filter: $filter,
    top: 50
);
```

### Get Invoice Details with Lines

```php
$invoice = $client->verkoopfacturen()->get($invoiceId);

echo "Invoice #{$invoice->factuurnummer}\n";
echo "Customer: {$invoice->relatie->naam}\n";
echo "Date: {$invoice->datum->format('Y-m-d')}\n";
echo "\nLines:\n";

foreach ($invoice->regels as $line) {
    echo sprintf(
        "  %s x %.2f @ €%.2f = €%.2f\n",
        $line->aantal,
        $line->artikel->naam ?? 'Service',
        $line->stuksprijs,
        $line->totaal
    );
}

echo "\nSubtotal: €{$invoice->totaalbedragExclusiefBtw}\n";
echo "VAT: €" . ($invoice->totaalbedragInclusiefBtw - $invoice->totaalbedragExclusiefBtw) . "\n";
echo "Total: €{$invoice->totaalbedragInclusiefBtw}\n";
echo "Outstanding: €{$invoice->openstaand}\n";
```

### Find Unpaid Invoices

```php
// Find all unpaid invoices
$unpaidInvoices = $client->verkoopfacturen()->all(
    filter: "openstaand gt 0"
);

$totalOutstanding = 0;
foreach ($unpaidInvoices as $invoice) {
    echo "Invoice #{$invoice->factuurnummer}: €{$invoice->openstaand} outstanding\n";
    $totalOutstanding += $invoice->openstaand;
}

echo "\nTotal outstanding: €{$totalOutstanding}\n";
```

### Export Invoices for E-Invoicing

```php
// Get invoices from last month
$startDate = new DateTimeImmutable('first day of last month');
$endDate = new DateTimeImmutable('last day of last month');

$filter = sprintf(
    "datum gt %s and datum lt %s",
    $startDate->format(DateTimeImmutable::ATOM),
    $endDate->format(DateTimeImmutable::ATOM)
);

$invoices = $client->verkoopfacturen()->all(filter: $filter);

// Export each as UBL
foreach ($invoices as $invoice) {
    $ubl = $client->verkoopfacturen()->getUbl($invoice->id);
    
    $filename = "ubl/invoice-{$invoice->factuurnummer}.xml";
    file_put_contents($filename, $ubl);
}
```

### Search Invoices by Customer

```php
// Get all invoices for a specific customer
$customerId = 'customer-uuid-here';

$customerInvoices = $client->verkoopfacturen()->all(
    filter: "relatie/id eq '{$customerId}'"
);

echo "Found " . count($customerInvoices) . " invoices\n";
```

## Model Reference

**Main Models:**
- `VerkoopfactuurModel` - Sales invoice data
- `VerkoopfactuurIdentifierModel` - Invoice reference
- `VerkoopBoekingRegelModel` - Invoice line
- `RelatieIdentifierModel` - Customer reference

**Related Models:**
- `BtwBoekingModel` - VAT booking
- `DagboekIdentifierModel` - Journal reference

## Related Services

- [Verkoopboekingen](verkoopboekingen.md) - Sales bookings
- [Verkooporders](verkooporders.md) - Sales orders
- [Relaties](relaties.md) - Customers
- [Artikelen](artikelen.md) - Products

## Notes

- This is a **read-only** service - you cannot create or update invoices via this endpoint
- Invoices are typically created through the VerkoopboekingenService
- Use `getUbl()` for compliance with e-invoicing standards
- The `openstaand` field shows the outstanding amount for payment tracking
