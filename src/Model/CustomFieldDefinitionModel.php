<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\CustomFieldDefinitionPropertyModel;

final class CustomFieldDefinitionModel
{
    public ?string $name = null;

    /** @var array<int, CustomFieldDefinitionPropertyModel>|null */
    public ?array $properties = null;

    public ?string $type = null;
}
