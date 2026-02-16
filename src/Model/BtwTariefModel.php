<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

final class BtwTariefModel
{
    public ?float $btwPercentage = null;

    public ?string $btwSoort = null;

    public ?\DateTimeImmutable $datumTotEnMet = null;

    public ?\DateTimeImmutable $datumVanaf = null;
}
