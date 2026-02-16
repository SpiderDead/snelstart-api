<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\PrijsModel;

final class ArtikelPrijsModel
{
    public ?string $artikelOmschrijving = null;

    public ?string $artikelcode = null;

    public ?string $prijsIngave = null;

    /** @var array<int, PrijsModel>|null */
    public ?array $prijzen = null;
}
