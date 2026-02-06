<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsKasboekingenGrootboekBoekingsRegelModel
{
    public ?string $btwSoort = null;

    public ?float $credit = null;

    public ?float $debet = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsGrootboekenGrootboekIdentifierModel $grootboek = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKostenplaatsenKostenplaatsIdentifierModel $kostenplaats = null;

    public ?string $omschrijving = null;
}
