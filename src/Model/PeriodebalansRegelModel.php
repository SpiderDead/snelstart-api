<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel;
use SpiderDead\SnelStartApi\Model\RgsModel;

final class PeriodebalansRegelModel
{
    public ?float $credit = null;

    public ?float $debet = null;

    public ?float $eindSaldoPeriode = null;

    public ?GrootboekIdentifierModel $grootboekIdentifier = null;

    public ?int $grootboekNummer = null;

    public ?string $grootboekOmschrijving = null;

    /** @var array<int, RgsModel>|null */
    public ?array $rgsCode = null;

    public ?float $startSaldoBoekjaar = null;

    public ?float $startSaldoPeriode = null;
}
