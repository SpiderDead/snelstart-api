<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class ActieprijzenModel
{
    /** @var array<int, \SpiderDead\SnelStartApi\Model\ArtikelPrijsModel>|null */
    public ?array $artikelPrijzen = null;

    public ?\DateTimeImmutable $einddatum = null;

    public ?string $omschrijving = null;

    public ?\DateTimeImmutable $startdatum = null;

    public ?string $status = null;
}
