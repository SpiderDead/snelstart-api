<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\ArtikelIdentifierModel;
use SpiderDead\SnelStartApi\Model\IngaveGegevenModel;

final class VerkooporderRegelModel
{
    public ?float $aantal = null;

    public ?ArtikelIdentifierModel $artikel = null;

    /** @var array<int, IngaveGegevenModel>|null */
    public ?array $extraRegelVelden = null;

    public ?float $kortingsPercentage = null;

    public ?string $omschrijving = null;

    public ?float $stuksprijs = null;

    public ?float $totaal = null;
}
