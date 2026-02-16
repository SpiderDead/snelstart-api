<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class PeriodebalansRegelModel
{
    public ?float $credit = null;

    public ?float $debet = null;

    public ?float $eindSaldoPeriode = null;

    public ?\SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel $grootboekIdentifier = null;

    public ?int $grootboekNummer = null;

    public ?string $grootboekOmschrijving = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\RgsModel>|null */
    public ?array $rgsCode = null;

    public ?float $startSaldoBoekjaar = null;

    public ?float $startSaldoPeriode = null;
}
