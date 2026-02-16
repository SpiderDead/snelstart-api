<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\RgsModel;

final class GrootboekModel
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

    /** @var array<int, RgsModel>|null */
    public ?array $rgsCode = null;

    public ?string $uri = null;

    public ?string $vatRateCode = null;
}
