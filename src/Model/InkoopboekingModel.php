<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\BtwBoekingModel;
use SpiderDead\SnelStartApi\Model\DocumentModel;
use SpiderDead\SnelStartApi\Model\InkoopboekingRegelModel;
use SpiderDead\SnelStartApi\Model\RelatieIdentifierModel;

final class InkoopboekingModel
{
    /** @var array<int, InkoopboekingRegelModel> */
    public array $boekingsregels;

    public ?string $boekstuk = null;

    /** @var array<int, BtwBoekingModel>|null */
    public ?array $btw = null;

    /** @var array<int, DocumentModel>|null */
    public ?array $documents = null;

    public ?float $factuurbedrag = null;

    public \DateTimeImmutable $factuurdatum;

    public string $factuurnummer;

    public ?bool $gewijzigdDoorAccountant = null;

    public ?string $id = null;

    public RelatieIdentifierModel $leverancier;

    public ?bool $markering = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;
}
