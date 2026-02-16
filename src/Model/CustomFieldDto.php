<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class CustomFieldDto
{
    public ?\SpiderDead\SnelStartApi\Model\CustomFieldDefinitionDto $definition = null;

    /** @var array<int, mixed>|null */
    public ?array $value = null;
}
