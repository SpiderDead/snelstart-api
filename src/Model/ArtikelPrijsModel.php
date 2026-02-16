<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class ArtikelPrijsModel
{
    public ?string $artikelOmschrijving = null;

    public ?string $artikelcode = null;

    public ?string $prijsIngave = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\PrijsModel>|null */
    public ?array $prijzen = null;
}
