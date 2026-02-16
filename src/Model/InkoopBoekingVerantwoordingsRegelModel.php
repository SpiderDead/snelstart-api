<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class InkoopBoekingVerantwoordingsRegelModel
{
    public float $bedrag;

    public \SpiderDead\SnelStartApi\Model\DocumentIdentifierModel $boekingId;

    public string $omschrijving;
}
