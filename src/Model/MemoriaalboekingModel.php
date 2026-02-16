<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class MemoriaalboekingModel
{
    public ?string $boekstuk = null;

    public \SpiderDead\SnelStartApi\Model\DagboekIdentifierModel $dagboek;

    public \DateTimeImmutable $datum;

    public ?bool $gewijzigdDoorAccountant = null;

    public ?string $id = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\InkoopBoekingVerantwoordingsRegelModel>|null */
    public ?array $inkoopboekingBoekingsRegels = null;

    public ?bool $markering = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\MemoriaalBoekingsRegelModel>|null */
    public ?array $memoriaalBoekingsRegels = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\VerkoopBoekingVerantwoordingsRegelModel>|null */
    public ?array $verkoopboekingBoekingsRegels = null;
}
