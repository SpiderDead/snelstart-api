<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class InkoopBoekingVerantwoordingsRegelModel
{
    public ?float $bedrag = null;

    public ?\SpiderDead\SnelStartApi\Model\DocumentIdentifierModel $boekingId = null;

    public ?string $omschrijving = null;
}
