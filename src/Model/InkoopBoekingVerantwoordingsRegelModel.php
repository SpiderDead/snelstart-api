<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\DocumentIdentifierModel;

final class InkoopBoekingVerantwoordingsRegelModel
{
    public float $bedrag;

    public DocumentIdentifierModel $boekingId;

    public string $omschrijving;
}
