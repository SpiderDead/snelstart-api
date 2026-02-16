<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\RelatieIdentifierModel;
use SpiderDead\SnelStartApi\Model\VerkoopOrderIdentifierModel;
use SpiderDead\SnelStartApi\Model\VerkoopboekingIdentifierModel;

final class VerkoopfactuurModel
{
    public ?float $factuurBedrag = null;

    public ?\DateTimeImmutable $factuurDatum = null;

    public string $factuurnummer;

    public ?string $id = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?float $openstaandSaldo = null;

    public ?RelatieIdentifierModel $relatie = null;

    public ?string $uri = null;

    public ?VerkoopboekingIdentifierModel $verkoopBoeking = null;

    /** @var array<int, VerkoopOrderIdentifierModel>|null */
    public ?array $verkoopOrders = null;

    public ?\DateTimeImmutable $vervalDatum = null;
}
