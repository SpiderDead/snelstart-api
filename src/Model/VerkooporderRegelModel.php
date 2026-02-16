<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class VerkooporderRegelModel
{
    public ?float $aantal = null;

    public ?\SpiderDead\SnelStartApi\Model\ArtikelIdentifierModel $artikel = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\IngaveGegevenModel>|null */
    public ?array $extraRegelVelden = null;

    public ?float $kortingsPercentage = null;

    public ?string $omschrijving = null;

    public ?float $stuksprijs = null;

    public ?float $totaal = null;
}
