<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class VerkoopBoekingVerantwoordingsRegelModel
{
    public float $bedrag;

    public \SpiderDead\SnelStartApi\Model\VerkoopboekingIdentifierModel $boekingId;

    public string $omschrijving;
}
