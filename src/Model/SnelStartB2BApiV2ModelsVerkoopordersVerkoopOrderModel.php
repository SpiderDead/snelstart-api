<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsVerkoopordersVerkoopOrderModel
{
    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesAdresModel $afleveradres = null;

    public ?string $betalingskenmerk = null;

    public ?\DateTimeImmutable $datum = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersIngaveGegevenModel>|null */
    public ?array $extraHoofdVelden = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesAdresModel $factuuradres = null;

    public ?float $factuurkorting = null;

    public ?bool $geblokkeerd = null;

    public ?string $id = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopBoekingenIncassoMachtigingIdentifierModel $incassomachtiging = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKostenplaatsenKostenplaatsIdentifierModel $kostenplaats = null;

    public ?int $krediettermijn = null;

    public ?string $memo = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?int $nummer = null;

    public ?string $omschrijving = null;

    public ?string $orderreferentie = null;

    public ?string $procesStatus = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersVerkooporderRegelModel>|null */
    public ?array $regels = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieIdentifierModel $relatie = null;

    public ?float $totaalExclusiefBtw = null;

    public ?float $totaalInclusiefBtw = null;

    public ?string $uri = null;

    public ?string $verkoopOrderStatus = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopfacturenVerkoopfactuurIdentifierModel $verkoopfactuur = null;

    public ?string $verkooporderBtwIngaveModel = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersjablonenVerkoopordersjabloonIdentifierModel $verkoopordersjabloon = null;
}
