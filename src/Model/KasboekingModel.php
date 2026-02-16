<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\BtwBoekingregelModel;
use SpiderDead\SnelStartApi\Model\DagboekIdentifierModel;
use SpiderDead\SnelStartApi\Model\GrootboekBoekingsRegelModel;
use SpiderDead\SnelStartApi\Model\InkoopBoekingVerantwoordingsRegelModel2;
use SpiderDead\SnelStartApi\Model\VerkoopBoekingVerantwoordingsRegelModel2;

final class KasboekingModel
{
    public float $bedragOntvangen;

    public float $bedragUitgegeven;

    public ?string $boekstuk = null;

    /** @var array<int, BtwBoekingregelModel>|null */
    public ?array $btwBoekingsregels = null;

    public DagboekIdentifierModel $dagboek;

    public \DateTimeImmutable $datum;

    public ?bool $gewijzigdDoorAccountant = null;

    /** @var array<int, GrootboekBoekingsRegelModel>|null */
    public ?array $grootboekBoekingsRegels = null;

    public ?string $id = null;

    /** @var array<int, InkoopBoekingVerantwoordingsRegelModel2>|null */
    public ?array $inkoopboekingBoekingsRegels = null;

    public ?bool $markering = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;

    /** @var array<int, VerkoopBoekingVerantwoordingsRegelModel2>|null */
    public ?array $verkoopboekingBoekingsRegels = null;
}
