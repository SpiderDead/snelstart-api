<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsArtikelenArtikelModel
{
    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenArtikelOmzetGroepIdentifierModel $artikelOmzetgroep = null;

    public ?string $artikelcode = null;

    public ?string $eenheid = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenExtraVeldArtikelModel>|null */
    public ?array $extraVelden = null;

    public ?string $id = null;

    public ?float $inkoopprijs = null;

    public ?bool $isNonActief = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $omschrijving = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieIdentifierModel $relatie = null;

    public ?float $technischeVoorraad = null;

    public ?string $uri = null;

    public ?float $verkoopprijs = null;

    public ?bool $voorraadControle = null;

    public ?float $vrijeVoorraad = null;
}
