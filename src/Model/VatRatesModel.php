<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class VatRatesModel
{
    public ?string $countryCode = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\VatRateModel>|null */
    public ?array $vatRates = null;
}
