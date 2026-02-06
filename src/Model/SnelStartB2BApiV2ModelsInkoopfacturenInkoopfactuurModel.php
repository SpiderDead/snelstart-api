<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsInkoopfacturenInkoopfactuurModel
{
    public ?float $factuurBedrag = null;

    public ?\DateTimeImmutable $factuurDatum = null;

    public ?string $factuurnummer = null;

    public ?string $id = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenInkoopboekingIdentifierModel $inkoopBoeking = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?float $openstaandSaldo = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieIdentifierModel $relatie = null;

    public ?string $uri = null;

    public ?\DateTimeImmutable $vervalDatum = null;
}
