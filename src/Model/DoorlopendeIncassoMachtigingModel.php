<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\RelatieIdentifierModel;

final class DoorlopendeIncassoMachtigingModel
{
    public ?\DateTimeImmutable $afsluitDatum = null;

    public ?string $id = null;

    public ?\DateTimeImmutable $intrekkingsDatum = null;

    public ?string $kenmerk = null;

    public ?RelatieIdentifierModel $klant = null;

    public ?string $omschrijving = null;

    public ?string $uri = null;
}
