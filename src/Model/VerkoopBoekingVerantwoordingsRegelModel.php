<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\VerkoopboekingIdentifierModel;

final class VerkoopBoekingVerantwoordingsRegelModel
{
    public float $bedrag;

    public VerkoopboekingIdentifierModel $boekingId;

    public string $omschrijving;
}
