<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class VatRateModel
{
    public ?float $rate = null;

    public ?string $rateCode = null;

    public ?\DateTimeImmutable $validFrom = null;
}
