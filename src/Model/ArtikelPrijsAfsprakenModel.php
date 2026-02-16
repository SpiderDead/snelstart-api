<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\KlantAfsprakenModel;

final class ArtikelPrijsAfsprakenModel
{
    public ?string $artikelCode = null;

    public ?string $artikelOmschrijving = null;

    public ?float $basisprijs = null;

    /** @var array<int, KlantAfsprakenModel>|null */
    public ?array $klantAfspraken = null;
}
