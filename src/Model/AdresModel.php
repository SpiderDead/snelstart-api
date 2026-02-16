<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\LandIdentifierModel;

final class AdresModel
{
    public ?string $contactpersoon = null;

    public ?LandIdentifierModel $land = null;

    public ?string $plaats = null;

    public ?string $postcode = null;

    public ?string $straat = null;
}
