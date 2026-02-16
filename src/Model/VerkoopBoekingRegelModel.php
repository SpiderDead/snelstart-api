<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class VerkoopBoekingRegelModel
{
    public ?float $bedrag = null;

    public ?string $btwSoort = null;

    public ?\SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel $grootboek = null;

    public ?\SpiderDead\SnelStartApi\Model\KostenplaatsIdentifierModel $kostenplaats = null;

    public ?string $omschrijving = null;
}
