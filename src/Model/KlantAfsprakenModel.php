<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class KlantAfsprakenModel
{
    public ?\DateTimeImmutable $einddatum = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\PrijsAfspraakModel>|null */
    public ?array $prijsAfspraken = null;

    public ?string $prijsIngave = null;

    public ?int $relatieCode = null;

    public ?string $relatieNaam = null;

    public ?string $relatiePublicIdentifier = null;

    public ?\DateTimeImmutable $startdatum = null;

    public ?string $status = null;
}
