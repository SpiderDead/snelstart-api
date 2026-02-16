<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\VatRateModel;

final class VatRatesModel
{
    public ?string $countryCode = null;

    /** @var array<int, VatRateModel>|null */
    public ?array $vatRates = null;
}
