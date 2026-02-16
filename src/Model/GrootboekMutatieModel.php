<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\DagboekIdentifierModel;
use SpiderDead\SnelStartApi\Model\DocumentModel;
use SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel;
use SpiderDead\SnelStartApi\Model\KostenplaatsIdentifierModel;
use SpiderDead\SnelStartApi\Model\RelatieIdentifierModel;

final class GrootboekMutatieModel
{
    public ?string $boekstuk = null;

    public ?float $credit = null;

    public ?DagboekIdentifierModel $dagboek = null;

    public ?\DateTimeImmutable $datum = null;

    public ?float $debet = null;

    /** @var array<int, DocumentModel>|null */
    public ?array $documents = null;

    public ?string $factuurNummer = null;

    public ?GrootboekIdentifierModel $grootboek = null;

    public ?string $id = null;

    public ?KostenplaatsIdentifierModel $kostenplaats = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?RelatieIdentifierModel $relatiePublicIdentifier = null;

    public ?float $saldo = null;

    public ?string $uri = null;
}
