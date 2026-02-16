<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class CustomFieldDefinitionModel
{
    public ?string $name = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\CustomFieldDefinitionPropertyModel>|null */
    public ?array $properties = null;

    public ?string $type = null;
}
