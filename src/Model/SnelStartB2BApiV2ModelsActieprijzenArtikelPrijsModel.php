<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsActieprijzenArtikelPrijsModel
{
    public ?string $artikelOmschrijving = null;

    public ?string $artikelcode = null;

    public ?string $prijsIngave = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsActieprijzenPrijsModel>|null */
    public ?array $prijzen = null;
}
