<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsGrootboekMutatiesGrootboekMutatieModel
{
    public ?string $boekstuk = null;

    public ?float $credit = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsDagboekenDagboekIdentifierModel $dagboek = null;

    public ?\DateTimeImmutable $datum = null;

    public ?float $debet = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsDocumentenDocumentModel>|null */
    public ?array $documents = null;

    public ?string $factuurNummer = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsGrootboekenGrootboekIdentifierModel $grootboek = null;

    public ?string $id = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsKostenplaatsenKostenplaatsIdentifierModel $kostenplaats = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieIdentifierModel $relatiePublicIdentifier = null;

    public ?float $saldo = null;

    public ?string $uri = null;
}
