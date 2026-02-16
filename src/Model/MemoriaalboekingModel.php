<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\DagboekIdentifierModel;
use SpiderDead\SnelStartApi\Model\InkoopBoekingVerantwoordingsRegelModel;
use SpiderDead\SnelStartApi\Model\MemoriaalBoekingsRegelModel;
use SpiderDead\SnelStartApi\Model\VerkoopBoekingVerantwoordingsRegelModel;

final class MemoriaalboekingModel
{
    public ?string $boekstuk = null;

    public DagboekIdentifierModel $dagboek;

    public \DateTimeImmutable $datum;

    public ?bool $gewijzigdDoorAccountant = null;

    public ?string $id = null;

    /** @var array<int, InkoopBoekingVerantwoordingsRegelModel>|null */
    public ?array $inkoopboekingBoekingsRegels = null;

    public ?bool $markering = null;

    /** @var array<int, MemoriaalBoekingsRegelModel>|null */
    public ?array $memoriaalBoekingsRegels = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;

    /** @var array<int, VerkoopBoekingVerantwoordingsRegelModel>|null */
    public ?array $verkoopboekingBoekingsRegels = null;
}
