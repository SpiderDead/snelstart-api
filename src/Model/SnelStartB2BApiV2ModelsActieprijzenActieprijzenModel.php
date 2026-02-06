<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsActieprijzenActieprijzenModel
{
    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsActieprijzenArtikelPrijsModel>|null */
    public ?array $artikelPrijzen = null;

    public ?\DateTimeImmutable $einddatum = null;

    public ?string $omschrijving = null;

    public ?\DateTimeImmutable $startdatum = null;

    public ?string $status = null;
}
