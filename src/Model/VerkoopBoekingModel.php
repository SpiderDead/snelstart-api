<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class VerkoopBoekingModel
{
    public ?int $betalingstermijn = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\VerkoopBoekingRegelModel>|null */
    public ?array $boekingsregels = null;

    public ?string $boekstuk = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\VerkoopBoekingBtwRegelModel>|null */
    public ?array $btw = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\DocumentModel>|null */
    public ?array $documents = null;

    public ?\SpiderDead\SnelStartApi\Model\IncassoMachtigingIdentifierModel $doorlopendeIncassoMachtiging = null;

    public ?\SpiderDead\SnelStartApi\Model\VerkoopBoekingEenmaligeIncassoMachtigingModel $eenmaligeIncassoMachtiging = null;

    public ?float $factuurbedrag = null;

    public ?\DateTimeImmutable $factuurdatum = null;

    public ?string $factuurnummer = null;

    public ?bool $gewijzigdDoorAccountant = null;

    public ?string $id = null;

    public ?\SpiderDead\SnelStartApi\Model\RelatieIdentifierModel $klant = null;

    public ?bool $markering = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;
}
