<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsGrootboekenGrootboekModel
{
    /** @var array<int, string>|null */
    public ?array $btwSoort = null;

    public ?string $grootboekRubriek = null;

    public ?string $grootboekfunctie = null;

    public ?string $id = null;

    public ?bool $kostenplaatsVerplicht = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?bool $nonactief = null;

    public ?int $nummer = null;

    public ?string $omschrijving = null;

    public ?string $rekeningCode = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsGrootboekenRgsModel>|null */
    public ?array $rgsCode = null;

    public ?string $uri = null;

    public ?string $vatRateCode = null;
}
