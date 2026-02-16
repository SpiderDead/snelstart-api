<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\PrijsAfspraakModel;

final class KlantAfsprakenModel
{
    public ?\DateTimeImmutable $einddatum = null;

    /** @var array<int, PrijsAfspraakModel>|null */
    public ?array $prijsAfspraken = null;

    public ?string $prijsIngave = null;

    public ?int $relatieCode = null;

    public ?string $relatieNaam = null;

    public ?string $relatiePublicIdentifier = null;

    public ?\DateTimeImmutable $startdatum = null;

    public ?string $status = null;
}
