<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel;
use SpiderDead\SnelStartApi\Model\KostenplaatsIdentifierModel;

final class MemoriaalBoekingsRegelModel
{
    public ?float $credit = null;

    public ?float $debet = null;

    public GrootboekIdentifierModel $grootboek;

    public ?KostenplaatsIdentifierModel $kostenplaats = null;

    public string $omschrijving;
}
