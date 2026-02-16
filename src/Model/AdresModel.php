<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class AdresModel
{
    public ?string $contactpersoon = null;

    public ?\SpiderDead\SnelStartApi\Model\LandIdentifierModel $land = null;

    public ?string $plaats = null;

    public ?string $postcode = null;

    public ?string $straat = null;
}
