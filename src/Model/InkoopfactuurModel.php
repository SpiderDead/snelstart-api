<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\DocumentIdentifierModel;
use SpiderDead\SnelStartApi\Model\RelatieIdentifierModel;

final class InkoopfactuurModel
{
    public ?float $factuurBedrag = null;

    public ?\DateTimeImmutable $factuurDatum = null;

    public string $factuurnummer;

    public ?string $id = null;

    public ?DocumentIdentifierModel $inkoopBoeking = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?float $openstaandSaldo = null;

    public ?RelatieIdentifierModel $relatie = null;

    public ?string $uri = null;

    public ?\DateTimeImmutable $vervalDatum = null;
}
