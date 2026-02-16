<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class KolommenbalansRegelModel
{
    public ?float $balansCredit = null;

    public ?float $balansDebet = null;

    public ?\SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel $grootboekIdentifier = null;

    public ?int $grootboekNummer = null;

    public ?string $grootboekOmschrijving = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\RgsModel>|null */
    public ?array $rgsCode = null;

    public ?float $verliesEnWinstCredit = null;

    public ?float $verliesEnWinstDebet = null;
}
