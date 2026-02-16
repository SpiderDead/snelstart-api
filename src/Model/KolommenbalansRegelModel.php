<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel;
use SpiderDead\SnelStartApi\Model\RgsModel;

final class KolommenbalansRegelModel
{
    public ?float $balansCredit = null;

    public ?float $balansDebet = null;

    public ?GrootboekIdentifierModel $grootboekIdentifier = null;

    public ?int $grootboekNummer = null;

    public ?string $grootboekOmschrijving = null;

    /** @var array<int, RgsModel>|null */
    public ?array $rgsCode = null;

    public ?float $verliesEnWinstCredit = null;

    public ?float $verliesEnWinstDebet = null;
}
