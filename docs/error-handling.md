# Error Handling Guide

Comprehensive guide to handling errors in the SnelStart API SDK.

## Exception Hierarchy

All exceptions extend `ApiException`, which provides:
- `getMessage()` - Error message
- `getStatusCode()` - HTTP status code
- `getPayload()` - Raw response body
- `getHeaders()` - Response headers
- `getOperationId()` - The operation that failed

```
ApiException (base)
├── BadRequestException (400)
├── UnauthorizedException (401)
├── ForbiddenException (403)
├── NotFoundException (404)
├── ConflictException (409)
├── UnprocessableEntityException (422)
├── RateLimitedException (429)
├── ServerErrorException (500)
├── ServiceUnavailableException (503)
└── UnexpectedStatusException (all other codes)
```

## Available Exceptions

### `BadRequestException` (400)
**Cause:** Invalid request data, malformed parameters

```php
use SpiderDead\SnelStartApi\Exception\BadRequestException;

try {
    $client->artikelen()->create($invalidData);
} catch (BadRequestException $e) {
    echo "Bad request: {$e->getMessage()}\n";
    
    // Parse error details from payload
    $errors = json_decode($e->getPayload(), true);
    print_r($errors);
}
```

---

### `UnauthorizedException` (401)
**Cause:** Invalid API key, expired credentials

```php
use SpiderDead\SnelStartApi\Exception\UnauthorizedException;

try {
    $artikelen = $client->artikelen()->all();
} catch (UnauthorizedException $e) {
    echo "Authentication failed. Please check your API key.\n";
    
    // Refresh API key
    $newKey = $this->refreshApiKey();
    
    // Create new client
    $config = new ClientConfig(apiKey: $newKey);
    $client = new SnelStartClient(..., $config);
}
```

---

### `ForbiddenException` (403)
**Cause:** Insufficient permissions, access denied

```php
use SpiderDead\SnelStartApi\Exception\ForbiddenException;

try {
    $client->btwaangiftes()->get($id);
} catch (ForbiddenException $e) {
    echo "Access denied. You don't have permission for this operation.\n";
    
    // Check which administration you're accessing
    $access = $client->authorization()->allHasUserAccessToAdministration();
    print_r($access);
}
```

---

### `NotFoundException` (404)
**Cause:** Resource doesn't exist

```php
use SpiderDead\SnelStartApi\Exception\NotFoundException;

try {
    $artikel = $client->artikelen()->get($id);
} catch (NotFoundException $e) {
    echo "Article not found with ID: {$id}\n";
    
    // Search for similar items
    $results = $client->artikelen()->all(
        filter: "contains(naam, 'search term')"
    );
}
```

---

### `ConflictException` (409)
**Cause:** Resource conflict, duplicate entry, version mismatch

```php
use SpiderDead\SnelStartApi\Exception\ConflictException;

try {
    $client->relaties()->create($newRelatie);
} catch (ConflictException $e) {
    echo "Conflict: {$e->getMessage()}\n";
    
    // Check for existing relation
    $existing = $client->relaties()->all(
        filter: "naam eq '{$newRelatie->naam}'"
    );
}
```

---

### `UnprocessableEntityException` (422)
**Cause:** Validation errors, business logic violations

```php
use SpiderDead\SnelStartApi\Exception\UnprocessableEntityException;

try {
    $client->artikelen()->create($artikel);
} catch (UnprocessableEntityException $e) {
    echo "Validation failed:\n";
    
    // Parse validation errors
    $response = json_decode($e->getPayload(), true);
    
    if (isset($response['errors'])) {
        foreach ($response['errors'] as $field => $messages) {
            echo "  {$field}: " . implode(', ', $messages) . "\n";
        }
    }
}
```

---

### `RateLimitedException` (429)
**Cause:** Too many requests, rate limit exceeded

```php
use SpiderDead\SnelStartApi\Exception\RateLimitedException;

function fetchWithRetry($client, $id, $maxRetries = 3) {
    $attempt = 0;
    
    while ($attempt < $maxRetries) {
        try {
            return $client->artikelen()->get($id);
        } catch (RateLimitedException $e) {
            $attempt++;
            
            // Get retry-after from headers
            $retryAfter = (int) ($e->getHeaders()['Retry-After'][0] ?? 60);
            
            if ($attempt >= $maxRetries) {
                throw $e;  // Give up after max retries
            }
            
            echo "Rate limited. Waiting {$retryAfter} seconds (attempt {$attempt}/{$maxRetries})...\n";
            sleep($retryAfter);
        }
    }
}
```

---

### `ServerErrorException` (500)
**Cause:** Internal server error

```php
use SpiderDead\SnelStartApi\Exception\ServerErrorException;

try {
    $result = $client->grootboeken()->all();
} catch (ServerErrorException $e) {
    // Log the error
    error_log("SnelStart API server error: {$e->getMessage()}");
    error_log("Operation: {$e->getOperationId()}");
    error_log("Payload: {$e->getPayload()}");
    
    // Notify ops team
    $this->notifyOpsTeam($e);
    
    // Return cached data or fallback
    return $this->getCachedData();
}
```

---

### `ServiceUnavailableException` (503)
**Cause:** Service temporarily unavailable, maintenance

```php
use SpiderDead\SnelStartApi\Exception\ServiceUnavailableException;

function fetchWithBackoff($client, $id) {
    $backoff = [1, 2, 5, 10, 30];  // Seconds
    
    foreach ($backoff as $wait) {
        try {
            return $client->artikelen()->get($id);
        } catch (ServiceUnavailableException $e) {
            echo "Service unavailable. Retrying in {$wait} seconds...\n";
            sleep($wait);
        }
    }
    
    throw new RuntimeException('Service unavailable after retries');
}
```

---

## Error Handling Patterns

### Pattern 1: Specific Error Handling

Handle different error types with specific recovery strategies:

```php
use SpiderDead\SnelStartApi\Exception\UnauthorizedException;
use SpiderDead\SnelStartApi\Exception\NotFoundException;
use SpiderDead\SnelStartApi\Exception\RateLimitedException;
use SpiderDead\SnelStartApi\Exception\ApiException;

try {
    $artikel = $client->artikelen()->get($id);
} catch (UnauthorizedException $e) {
    // Refresh credentials
    $this->refreshAuth();
} catch (NotFoundException $e) {
    // Try to find by code instead
    $artikel = $this->findByCode($code);
} catch (RateLimitedException $e) {
    // Implement exponential backoff
    $this->retryWithBackoff($operation);
} catch (ApiException $e) {
    // Catch any other API error
    $this->logError($e);
}
```

---

### Pattern 2: Retry Logic

Implement retry for transient errors:

```php
function executeWithRetry(callable $operation, int $maxRetries = 3): mixed {
    $attempt = 0;
    $backoff = 1;
    
    while ($attempt < $maxRetries) {
        try {
            return $operation();
        } catch (RateLimitedException | ServiceUnavailableException $e) {
            $attempt++;
            
            if ($attempt >= $maxRetries) {
                throw $e;
            }
            
            sleep($backoff);
            $backoff *= 2;  // Exponential backoff
        }
    }
}

// Usage
$artikel = executeWithRetry(fn() => $client->artikelen()->get($id));
```

---

### Pattern 3: Validation Error Display

Parse and display validation errors:

```php
use SpiderDead\SnelStartApi\Exception\UnprocessableEntityException;

try {
    $client->relaties()->create($newCustomer);
} catch (UnprocessableEntityException $e) {
    $response = json_decode($e->getPayload(), true);
    
    if (isset($response['errors'])) {
        foreach ($response['errors'] as $field => $messages) {
            foreach ($messages as $message) {
                echo "Error in {$field}: {$message}\n";
            }
        }
    } else {
        echo "Validation failed: {$e->getMessage()}\n";
    }
}
```

---

### Pattern 4: Graceful Degradation

Provide fallback when API is unavailable:

```php
function getArticles($client): array {
    try {
        return $client->artikelen()->all();
    } catch (ServiceUnavailableException | ServerErrorException $e) {
        // Log error
        error_log("API unavailable: {$e->getMessage()}");
        
        // Return cached data
        return $this->getCachedArticles();
    } catch (ApiException $e) {
        // Log other errors
        error_log("API error: {$e->getMessage()}");
        
        // Return empty array
        return [];
    }
}
```

---

### Pattern 5: Comprehensive Error Logging

Log all API errors for debugging:

```php
use Psr\Log\LoggerInterface;
use SpiderDead\SnelStartApi\Exception\ApiException;

class SnelStartService {
    public function __construct(
        private SnelStartClient $client,
        private LoggerInterface $logger
    ) {}
    
    private function executeWithLogging(callable $operation): mixed {
        try {
            return $operation();
        } catch (ApiException $e) {
            $this->logger->error('SnelStart API error', [
                'exception' => get_class($e),
                'message' => $e->getMessage(),
                'status_code' => $e->getStatusCode(),
                'operation_id' => $e->getOperationId(),
                'payload' => $e->getPayload(),
            ]);
            
            throw $e;
        }
    }
    
    public function getArtikel(string $id): ArtikelModel {
        return $this->executeWithLogging(
            fn() => $this->client->artikelen()->get($id)
        );
    }
}
```

---

## Best Practices

### 1. Always Catch Specific Exceptions First

```php
// ✅ Good
try {
    $result = $client->artikelen()->get($id);
} catch (NotFoundException $e) {
    // Handle 404
} catch (UnauthorizedException $e) {
    // Handle 401
} catch (ApiException $e) {
    // Handle all others
}

// ❌ Bad
try {
    $result = $client->artikelen()->get($id);
} catch (ApiException $e) {
    // This catches everything - can't handle specific errors
}
```

### 2. Implement Retry for Transient Errors

Retry on rate limits and service unavailability, but not on client errors:

```php
// Retry these:
- RateLimitedException (429)
- ServiceUnavailableException (503)
- ServerErrorException (500) - sometimes

// Don't retry these:
- BadRequestException (400)
- UnauthorizedException (401)
- ForbiddenException (403)
- NotFoundException (404)
- UnprocessableEntityException (422)
```

### 3. Log All API Errors

Always log API errors for debugging and monitoring:

```php
catch (ApiException $e) {
    error_log(sprintf(
        'SnelStart API Error: [%d] %s - Operation: %s',
        $e->getStatusCode(),
        $e->getMessage(),
        $e->getOperationId()
    ));
}
```

### 4. Extract Meaningful Error Messages

```php
catch (ApiException $e) {
    $payload = json_decode($e->getPayload(), true);
    
    // Check for structured error response
    $userMessage = $payload['message'] 
        ?? $payload['error'] 
        ?? $e->getMessage();
    
    echo "Error: {$userMessage}\n";
}
```

## Complete Example

```php
<?php

use SpiderDead\SnelStartApi\SnelStartClient;
use SpiderDead\SnelStartApi\Exception\UnauthorizedException;
use SpiderDead\SnelStartApi\Exception\NotFoundException;
use SpiderDead\SnelStartApi\Exception\RateLimitedException;
use SpiderDead\SnelStartApi\Exception\UnprocessableEntityException;
use SpiderDead\SnelStartApi\Exception\ApiException;

class ArticleManager {
    public function __construct(private SnelStartClient $client) {}
    
    public function updateArticlePrice(string $id, float $newPrice): bool {
        try {
            // Fetch article
            $artikel = $this->client->artikelen()->get($id);
            
            // Update price
            $artikel->verkoopprijs = $newPrice;
            
            // Save
            $this->client->artikelen()->update($id, $artikel);
            
            return true;
            
        } catch (UnauthorizedException $e) {
            echo "Authentication failed. Please check API key.\n";
            return false;
            
        } catch (NotFoundException $e) {
            echo "Article not found: {$id}\n";
            return false;
            
        } catch (UnprocessableEntityException $e) {
            echo "Validation failed:\n";
            $errors = json_decode($e->getPayload(), true);
            print_r($errors);
            return false;
            
        } catch (RateLimitedException $e) {
            $retryAfter = (int) ($e->getHeaders()['Retry-After'][0] ?? 60);
            echo "Rate limited. Wait {$retryAfter} seconds and retry.\n";
            return false;
            
        } catch (ApiException $e) {
            echo "API error [{$e->getStatusCode()}]: {$e->getMessage()}\n";
            error_log("SnelStart API error: " . $e->getPayload());
            return false;
        }
    }
}
```

## Testing Error Handling

```php
use PHPUnit\Framework\TestCase;
use SpiderDead\SnelStartApi\Exception\NotFoundException;

class ArticleServiceTest extends TestCase {
    public function testHandlesNotFound(): void {
        $this->expectException(NotFoundException::class);
        
        $client->artikelen()->get('non-existent-id');
    }
    
    public function testRetriesOnRateLimit(): void {
        // Mock HTTP client to return 429
        // Verify retry logic executes
    }
}
```

## See Also

- [Quick Start Guide](quick-start.md)
- [Service Documentation](services/)
- [Main README](README.md)
