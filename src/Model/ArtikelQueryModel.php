<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class ArtikelQueryModel
{
    public ?\SpiderDead\SnelStartApi\Model\ArtikelOmzetGroepIdentifierModel $artikelOmzetgroep = null;

    public ?string $artikelcode = null;

    public ?string $eenheid = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\ExtraVeldArtikelModel>|null */
    public ?array $extraVelden = null;

    public ?string $id = null;

    public ?float $inkoopprijs = null;

    public ?bool $isHoofdartikel = null;

    public ?bool $isNonActief = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?\SpiderDead\SnelStartApi\Model\RelatieIdentifierModel $relatie = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SubartikelModel>|null */
    public ?array $subartikelen = null;

    public ?float $technischeVoorraad = null;

    public ?string $uri = null;

    public ?float $verkoopprijs = null;

    public ?bool $voorraadControle = null;

    public ?float $vrijeVoorraad = null;
}
