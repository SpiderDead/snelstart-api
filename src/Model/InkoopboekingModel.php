<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class InkoopboekingModel
{
    /** @var array<int, \SpiderDead\SnelStartApi\Model\InkoopboekingRegelModel>|null */
    public ?array $boekingsregels = null;

    public ?string $boekstuk = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\BtwBoekingModel>|null */
    public ?array $btw = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\DocumentModel>|null */
    public ?array $documents = null;

    public ?float $factuurbedrag = null;

    public ?\DateTimeImmutable $factuurdatum = null;

    public ?string $factuurnummer = null;

    public ?bool $gewijzigdDoorAccountant = null;

    public ?string $id = null;

    public ?\SpiderDead\SnelStartApi\Model\RelatieIdentifierModel $leverancier = null;

    public ?bool $markering = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;
}
