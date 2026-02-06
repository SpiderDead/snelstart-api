<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsArtikelenArtikelPrijsAfsprakenModel
{
    public ?string $artikelCode = null;

    public ?string $artikelOmschrijving = null;

    public ?float $basisprijs = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenKlantAfsprakenModel>|null */
    public ?array $klantAfspraken = null;
}
