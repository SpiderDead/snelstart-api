<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\ArtikelOmzetGroepIdentifierModel;
use SpiderDead\SnelStartApi\Model\ExtraVeldArtikelModel;
use SpiderDead\SnelStartApi\Model\RelatieIdentifierModel;
use SpiderDead\SnelStartApi\Model\SubartikelModel;

final class ArtikelQueryModel
{
    public ?ArtikelOmzetGroepIdentifierModel $artikelOmzetgroep = null;

    public ?string $artikelcode = null;

    public ?string $eenheid = null;

    /** @var array<int, ExtraVeldArtikelModel>|null */
    public ?array $extraVelden = null;

    public ?string $id = null;

    public ?float $inkoopprijs = null;

    public ?bool $isHoofdartikel = null;

    public ?bool $isNonActief = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?RelatieIdentifierModel $relatie = null;

    /** @var array<int, SubartikelModel>|null */
    public ?array $subartikelen = null;

    public ?float $technischeVoorraad = null;

    public ?string $uri = null;

    public ?float $verkoopprijs = null;

    public ?bool $voorraadControle = null;

    public ?float $vrijeVoorraad = null;
}
