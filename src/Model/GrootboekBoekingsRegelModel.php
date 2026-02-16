<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class GrootboekBoekingsRegelModel
{
    public ?string $btwSoort = null;

    public ?float $credit = null;

    public ?float $debet = null;

    public ?\SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel $grootboek = null;

    public ?\SpiderDead\SnelStartApi\Model\KostenplaatsIdentifierModel $kostenplaats = null;

    public ?string $omschrijving = null;
}
