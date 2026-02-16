<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class BankafschriftBestandResponse
{
    /** @var array<int, \SpiderDead\SnelStartApi\Model\BankafschriftBestandResponseError>|null */
    public ?array $errors = null;

    public ?bool $isSuccess = null;

    public ?string $name = null;
}
