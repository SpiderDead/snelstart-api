<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\VerkoopboekingIdentifierModel;

final class VerkoopBoekingVerantwoordingsRegelModel2
{
    public ?VerkoopboekingIdentifierModel $boekingId = null;

    public ?float $credit = null;

    public ?float $debet = null;

    public ?string $omschrijving = null;
}
