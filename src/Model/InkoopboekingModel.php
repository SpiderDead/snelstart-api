<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class InkoopboekingModel
{
    /** @var array<int, \SpiderDead\SnelStartApi\Model\InkoopboekingRegelModel> */
    public array $boekingsregels;

    public ?string $boekstuk = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\BtwBoekingModel>|null */
    public ?array $btw = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\DocumentModel>|null */
    public ?array $documents = null;

    public ?float $factuurbedrag = null;

    public \DateTimeImmutable $factuurdatum;

    public string $factuurnummer;

    public ?bool $gewijzigdDoorAccountant = null;

    public ?string $id = null;

    public \SpiderDead\SnelStartApi\Model\RelatieIdentifierModel $leverancier;

    public ?bool $markering = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;
}
