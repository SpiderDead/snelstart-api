<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel;

final class ArtikelOmzetGroepModel
{
    public ?string $id = null;

    public ?int $nummer = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;

    public ?GrootboekIdentifierModel $verkoopGrootboekNederlandIdentifier = null;

    public ?string $verkoopNederlandBtwSoort = null;
}
