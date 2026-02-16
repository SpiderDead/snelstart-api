<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class InkoopfactuurModel
{
    public ?float $factuurBedrag = null;

    public ?\DateTimeImmutable $factuurDatum = null;

    public ?string $factuurnummer = null;

    public ?string $id = null;

    public ?\SpiderDead\SnelStartApi\Model\DocumentIdentifierModel $inkoopBoeking = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?float $openstaandSaldo = null;

    public ?\SpiderDead\SnelStartApi\Model\RelatieIdentifierModel $relatie = null;

    public ?string $uri = null;

    public ?\DateTimeImmutable $vervalDatum = null;
}
