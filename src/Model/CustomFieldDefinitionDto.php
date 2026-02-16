<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\CustomFieldDefinitionPropertyDto;

final class CustomFieldDefinitionDto
{
    public ?string $name = null;

    /** @var array<int, CustomFieldDefinitionPropertyDto>|null */
    public ?array $properties = null;

    public ?string $type = null;

    public ?int $xPosition = null;

    public ?int $yPosition = null;
}
