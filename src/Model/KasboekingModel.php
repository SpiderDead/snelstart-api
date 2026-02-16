<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class KasboekingModel
{
    public ?float $bedragOntvangen = null;

    public ?float $bedragUitgegeven = null;

    public ?string $boekstuk = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\BtwBoekingregelModel>|null */
    public ?array $btwBoekingsregels = null;

    public ?\SpiderDead\SnelStartApi\Model\DagboekIdentifierModel $dagboek = null;

    public ?\DateTimeImmutable $datum = null;

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
