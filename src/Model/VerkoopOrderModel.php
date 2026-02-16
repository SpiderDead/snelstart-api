<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class VerkoopOrderModel
{
    public ?\SpiderDead\SnelStartApi\Model\AdresModel $afleveradres = null;

    public ?string $betalingskenmerk = null;

    public \DateTimeImmutable $datum;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\IngaveGegevenModel>|null */
    public ?array $extraHoofdVelden = null;

    public ?\SpiderDead\SnelStartApi\Model\AdresModel $factuuradres = null;

    public ?float $factuurkorting = null;

    public ?bool $geblokkeerd = null;

    public ?string $id = null;

    public ?\SpiderDead\SnelStartApi\Model\IncassoMachtigingIdentifierModel $incassomachtiging = null;

    public ?\SpiderDead\SnelStartApi\Model\KostenplaatsIdentifierModel $kostenplaats = null;

    public ?int $krediettermijn = null;

    public ?string $memo = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?int $nummer = null;

    public ?string $omschrijving = null;

    public ?string $orderreferentie = null;

    public ?string $procesStatus = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\VerkooporderRegelModel>|null */
    public ?array $regels = null;

    public \SpiderDead\SnelStartApi\Model\RelatieIdentifierModel $relatie;

    public ?float $totaalExclusiefBtw = null;

    public ?float $totaalInclusiefBtw = null;

    public ?string $uri = null;

    public ?string $verkoopOrderStatus = null;

    public ?\SpiderDead\SnelStartApi\Model\VerkoopfactuurIdentifierModel $verkoopfactuur = null;

    public ?string $verkooporderBtwIngaveModel = null;

    public ?\SpiderDead\SnelStartApi\Model\VerkoopordersjabloonIdentifierModel $verkoopordersjabloon = null;
}
