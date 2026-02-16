<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\BankafschriftBestandResponseError;

final class BankafschriftBestandResponse
{
    /** @var array<int, BankafschriftBestandResponseError>|null */
    public ?array $errors = null;

    public ?bool $isSuccess = null;

    public ?string $name = null;
}
