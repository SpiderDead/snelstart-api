<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class GrootboekMutatieModel
{
    public ?string $boekstuk = null;

    public ?float $credit = null;

    public ?\SpiderDead\SnelStartApi\Model\DagboekIdentifierModel $dagboek = null;

    public ?\DateTimeImmutable $datum = null;

    public ?float $debet = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\DocumentModel>|null */
    public ?array $documents = null;

    public ?string $factuurNummer = null;

    public ?\SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel $grootboek = null;

    public ?string $id = null;

    public ?\SpiderDead\SnelStartApi\Model\KostenplaatsIdentifierModel $kostenplaats = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?\SpiderDead\SnelStartApi\Model\RelatieIdentifierModel $relatiePublicIdentifier = null;

    public ?float $saldo = null;

    public ?string $uri = null;
}
