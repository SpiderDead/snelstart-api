<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class VerkoopfactuurModel
{
    public ?float $factuurBedrag = null;

    public ?\DateTimeImmutable $factuurDatum = null;

    public string $factuurnummer;

    public ?string $id = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?float $openstaandSaldo = null;

    public ?\SpiderDead\SnelStartApi\Model\RelatieIdentifierModel $relatie = null;

    public ?string $uri = null;

    public ?\SpiderDead\SnelStartApi\Model\VerkoopboekingIdentifierModel $verkoopBoeking = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\VerkoopOrderIdentifierModel>|null */
    public ?array $verkoopOrders = null;

    public ?\DateTimeImmutable $vervalDatum = null;
}
