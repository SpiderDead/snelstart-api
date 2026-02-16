<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class BankboekingModel
{
    public float $bedragOntvangen;

    public float $bedragUitgegeven;

    public ?string $boekstuk = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\BtwBoekingregelModel>|null */
    public ?array $btwBoekingsregels = null;

    public \SpiderDead\SnelStartApi\Model\DagboekIdentifierModel $dagboek;

    public \DateTimeImmutable $datum;

    public ?bool $gewijzigdDoorAccountant = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\GrootboekBoekingsRegelModel>|null */
    public ?array $grootboekBoekingsRegels = null;

    public ?string $id = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\InkoopBoekingVerantwoordingsRegelModel2>|null */
    public ?array $inkoopboekingBoekingsRegels = null;

    public ?bool $markering = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\VerkoopBoekingVerantwoordingsRegelModel2>|null */
    public ?array $verkoopboekingBoekingsRegels = null;
}
