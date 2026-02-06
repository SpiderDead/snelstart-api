<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsInkoopboekingenInkoopboekingModel
{
    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenInkoopboekingRegelModel>|null */
    public ?array $boekingsregels = null;

    public ?string $boekstuk = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsInkoopboekingenBtwBoekingModel>|null */
    public ?array $btw = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsDocumentenDocumentModel>|null */
    public ?array $documents = null;

    public ?float $factuurbedrag = null;

    public ?\DateTimeImmutable $factuurdatum = null;

    public ?string $factuurnummer = null;

    public ?bool $gewijzigdDoorAccountant = null;

    public ?string $id = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieIdentifierModel $leverancier = null;

    public ?bool $markering = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;
}
