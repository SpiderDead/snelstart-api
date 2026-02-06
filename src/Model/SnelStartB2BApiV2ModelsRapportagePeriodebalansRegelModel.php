<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsRapportagePeriodebalansRegelModel
{
    public ?float $credit = null;

    public ?float $debet = null;

    public ?float $eindSaldoPeriode = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsGrootboekenGrootboekIdentifierModel $grootboekIdentifier = null;

    public ?int $grootboekNummer = null;

    public ?string $grootboekOmschrijving = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsGrootboekenRgsModel>|null */
    public ?array $rgsCode = null;

    public ?float $startSaldoBoekjaar = null;

    public ?float $startSaldoPeriode = null;
}
