<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsKasboekingenKasboekingModel
{
    public ?float $bedragOntvangen = null;

    public ?float $bedragUitgegeven = null;

    public ?string $boekstuk = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKasboekingenBtwBoekingregelModel>|null */
    public ?array $btwBoekingsregels = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsDagboekenDagboekIdentifierModel $dagboek = null;

    public ?\DateTimeImmutable $datum = null;

    public ?bool $gewijzigdDoorAccountant = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKasboekingenGrootboekBoekingsRegelModel>|null */
    public ?array $grootboekBoekingsRegels = null;

    public ?string $id = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKasboekingenInkoopBoekingVerantwoordingsRegelModel>|null */
    public ?array $inkoopboekingBoekingsRegels = null;

    public ?bool $markering = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKasboekingenVerkoopBoekingVerantwoordingsRegelModel>|null */
    public ?array $verkoopboekingBoekingsRegels = null;
}
