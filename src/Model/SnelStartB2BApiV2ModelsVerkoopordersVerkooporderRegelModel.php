<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsVerkoopordersVerkooporderRegelModel
{
    public ?float $aantal = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenArtikelIdentifierModel $artikel = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersRegelIngaveGegevenModel>|null */
    public ?array $extraRegelVelden = null;

    public ?float $kortingsPercentage = null;

    public ?string $omschrijving = null;

    public ?float $stuksprijs = null;

    public ?float $totaal = null;
}
