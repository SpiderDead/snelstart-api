<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsBankboekingenMemoriaalboekingModel
{
    public ?string $boekstuk = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsDagboekenDagboekIdentifierModel $dagboek = null;

    public ?\DateTimeImmutable $datum = null;

    public ?bool $gewijzigdDoorAccountant = null;

    public ?string $id = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsBankboekingenMemoriaalboekingModelInkoopBoekingVerantwoordingsRegelModel>|null */
    public ?array $inkoopboekingBoekingsRegels = null;

    public ?bool $markering = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsBankboekingenMemoriaalboekingModelMemoriaalBoekingsRegelModel>|null */
    public ?array $memoriaalBoekingsRegels = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsBankboekingenMemoriaalboekingModelVerkoopBoekingVerantwoordingsRegelModel>|null */
    public ?array $verkoopboekingBoekingsRegels = null;
}
