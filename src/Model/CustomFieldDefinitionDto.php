<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class CustomFieldDefinitionDto
{
    public ?string $name = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\CustomFieldDefinitionPropertyDto>|null */
    public ?array $properties = null;

    public ?string $type = null;

    public ?int $xPosition = null;

    public ?int $yPosition = null;
}
