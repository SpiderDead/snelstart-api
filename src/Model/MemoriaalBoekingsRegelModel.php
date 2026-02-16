<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class MemoriaalBoekingsRegelModel
{
    public ?float $credit = null;

    public ?float $debet = null;

    public \SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel $grootboek;

    public ?\SpiderDead\SnelStartApi\Model\KostenplaatsIdentifierModel $kostenplaats = null;

    public string $omschrijving;
}
