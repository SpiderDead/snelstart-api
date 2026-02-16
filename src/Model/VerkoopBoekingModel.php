<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\DocumentModel;
use SpiderDead\SnelStartApi\Model\IncassoMachtigingIdentifierModel;
use SpiderDead\SnelStartApi\Model\RelatieIdentifierModel;
use SpiderDead\SnelStartApi\Model\VerkoopBoekingBtwRegelModel;
use SpiderDead\SnelStartApi\Model\VerkoopBoekingEenmaligeIncassoMachtigingModel;
use SpiderDead\SnelStartApi\Model\VerkoopBoekingRegelModel;

final class VerkoopBoekingModel
{
    public ?int $betalingstermijn = null;

    /** @var array<int, VerkoopBoekingRegelModel> */
    public array $boekingsregels;

    public ?string $boekstuk = null;

    /** @var array<int, VerkoopBoekingBtwRegelModel>|null */
    public ?array $btw = null;

    /** @var array<int, DocumentModel>|null */
    public ?array $documents = null;

    public ?IncassoMachtigingIdentifierModel $doorlopendeIncassoMachtiging = null;

    public ?VerkoopBoekingEenmaligeIncassoMachtigingModel $eenmaligeIncassoMachtiging = null;

    public ?float $factuurbedrag = null;

    public ?\DateTimeImmutable $factuurdatum = null;

    public string $factuurnummer;

    public ?bool $gewijzigdDoorAccountant = null;

    public ?string $id = null;

    public RelatieIdentifierModel $klant;

    public ?bool $markering = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;
}
