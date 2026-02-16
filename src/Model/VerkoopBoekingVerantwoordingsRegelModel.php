<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class VerkoopBoekingVerantwoordingsRegelModel
{
    public ?float $bedrag = null;

    public ?\SpiderDead\SnelStartApi\Model\VerkoopboekingIdentifierModel $boekingId = null;

    public ?string $omschrijving = null;
}
