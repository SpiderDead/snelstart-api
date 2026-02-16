# Inkoopboekingen Service

Manage purchase bookings in SnelStart.

## Available Methods

### Standard CRUD Operations

- `create()` - Create a new purchase booking
- `get($id)` - Get a specific purchase booking
- `update($id, $body)` - Update a purchase booking
- `delete($id)` - Delete a purchase booking

### Special Operations

#### `createFromAttachment()` - Create from File

Create purchase bookings by uploading an attachment (PDF, image, etc.).

```php
use SpiderDead\SnelStartApi\Model\AttachmentModel;

$attachment = new AttachmentModel();
$attachment->fileName = 'invoice.pdf';
$attachment->contentType = 'application/pdf';
$attachment->content = base64_encode(file_get_contents('invoice.pdf'));

$result = $client->inkoopboekingen()->createFromAttachment($attachment);
echo "Created instance ID: {$result->instanceId}\n";
```

**Parameters:**
- `$body` (AttachmentModel|null): File attachment

**Returns:** `CreateFromAttachmentModel`

---

#### `getCreateFromAttachmentStatus()` - Check Upload Status

Check the processing status of an attachment upload.

```php
$status = $client->inkoopboekingen()->getCreateFromAttachmentStatus($instanceId);

echo "Status: {$status->status}\n";
if ($status->inkoopboeking) {
    echo "Created booking ID: {$status->inkoopboeking->id}\n";
}
```

**Parameters:**
- `$instanceId` (string): Instance ID from createFromAttachment

**Returns:** `CreateFromAttachmentStatusModel`

---

#### `createUbl()` - Create from UBL

Create a purchase booking from UBL (Universal Business Language) format.

```php
use SpiderDead\SnelStartApi\Model\UblContentModel;

$ubl = new UblContentModel();
$ubl->content = $ublXmlContent;

$booking = $client->inkoopboekingen()->createUbl($ubl);
```

**Parameters:**
- `$body` (UblContentModel|null): UBL XML content

**Returns:** `InkoopboekingModel`

---

## Common Use Cases

### Upload Invoice PDF for Processing

```php
// Read PDF file
$pdfContent = file_get_contents('supplier-invoice.pdf');

// Create attachment
$attachment = new AttachmentModel();
$attachment->fileName = 'supplier-invoice.pdf';
$attachment->contentType = 'application/pdf';
$attachment->content = base64_encode($pdfContent);

// Upload for processing
$result = $client->inkoopboekingen()->createFromAttachment($attachment);

// Poll for completion
do {
    sleep(2);
    $status = $client->inkoopboekingen()->getCreateFromAttachmentStatus($result->instanceId);
} while ($status->status === 'Processing');

if ($status->status === 'Completed' && $status->inkoopboeking) {
    echo "Successfully created booking: {$status->inkoopboeking->id}\n";
} else {
    echo "Failed to process: {$status->error}\n";
}
```

### Create Manual Purchase Booking

```php
use SpiderDead\SnelStartApi\Model\InkoopboekingModel;

$booking = new InkoopboekingModel();
$booking->factuurnummer = 'SUP-2024-001';
$booking->factuurdatum = new DateTimeImmutable();
$booking->relatie = $supplierIdentifier;
// ... set other required fields

$created = $client->inkoopboekingen()->create($booking);
```

## Model Reference

- `InkoopboekingModel` - Purchase booking data
- `AttachmentModel` - File attachment for upload
- `CreateFromAttachmentModel` - Upload result
- `CreateFromAttachmentStatusModel` - Processing status
- `UblContentModel` - UBL XML content

## Related Services

- [Inkoopfacturen](inkoopfacturen.md) - Purchase invoices
- [Relaties](relaties.md) - Suppliers
- [Documenten](documenten.md) - Document management
