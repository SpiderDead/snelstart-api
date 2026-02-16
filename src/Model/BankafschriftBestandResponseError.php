<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

final class BankafschriftBestandResponseError
{
    public ?string $description = null;

    /** @var array<int, string>|null */
    public ?array $details = null;
}
