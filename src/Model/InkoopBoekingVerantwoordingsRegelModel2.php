<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\DocumentIdentifierModel;

final class InkoopBoekingVerantwoordingsRegelModel2
{
    public DocumentIdentifierModel $boekingId;

    public ?float $credit = null;

    public ?float $debet = null;

    public ?string $omschrijving = null;
}
