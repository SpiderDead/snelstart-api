<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsVerkoopfacturenVerkoopfactuurModel
{
    public ?float $factuurBedrag = null;

    public ?\DateTimeImmutable $factuurDatum = null;

    public ?string $factuurnummer = null;

    public ?string $id = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?float $openstaandSaldo = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieIdentifierModel $relatie = null;

    public ?string $uri = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopBoekingenVerkoopboekingIdentifierModel $verkoopBoeking = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersVerkoopOrderIdentifierModel>|null */
    public ?array $verkoopOrders = null;

    public ?\DateTimeImmutable $vervalDatum = null;
}
