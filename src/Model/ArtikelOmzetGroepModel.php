<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class ArtikelOmzetGroepModel
{
    public ?string $id = null;

    public ?int $nummer = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;

    public ?\SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel $verkoopGrootboekNederlandIdentifier = null;

    public ?string $verkoopNederlandBtwSoort = null;
}
