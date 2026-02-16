<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\AdresModel;
use SpiderDead\SnelStartApi\Model\IncassoMachtigingIdentifierModel;
use SpiderDead\SnelStartApi\Model\KostenplaatsIdentifierModel;
use SpiderDead\SnelStartApi\Model\RelatieIdentifierModel;
use SpiderDead\SnelStartApi\Model\VerkoopfactuurIdentifierModel;
use SpiderDead\SnelStartApi\Model\VerkooporderRegelModel;

final class OfferteModel
{
    public ?AdresModel $afleveradres = null;

    public ?string $betalingskenmerk = null;

    public \DateTimeImmutable $datum;

    public ?AdresModel $factuuradres = null;

    public ?float $factuurkorting = null;

    public ?string $id = null;

    public ?IncassoMachtigingIdentifierModel $incassomachtiging = null;

    public ?bool $isOfferte = null;

    public ?KostenplaatsIdentifierModel $kostenplaats = null;

    public ?int $krediettermijn = null;

    public ?string $memo = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?int $nummer = null;

    public ?string $omschrijving = null;

    public ?string $orderreferentie = null;

    public ?string $procesStatus = null;

    /** @var array<int, VerkooporderRegelModel>|null */
    public ?array $regels = null;

    public RelatieIdentifierModel $relatie;

    public ?float $totaalExclusiefBtw = null;

    public ?float $totaalInclusiefBtw = null;

    public ?string $uri = null;

    public ?VerkoopfactuurIdentifierModel $verkoopfactuur = null;

    public ?string $verkooporderBtwIngaveModel = null;
}
