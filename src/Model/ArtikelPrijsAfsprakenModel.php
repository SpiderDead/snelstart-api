<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class ArtikelPrijsAfsprakenModel
{
    public ?string $artikelCode = null;

    public ?string $artikelOmschrijving = null;

    public ?float $basisprijs = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\KlantAfsprakenModel>|null */
    public ?array $klantAfspraken = null;
}
