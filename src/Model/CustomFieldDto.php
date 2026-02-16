<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\CustomFieldDefinitionDto;

final class CustomFieldDto
{
    public ?CustomFieldDefinitionDto $definition = null;

    /** @var array<int, mixed>|null */
    public ?array $value = null;
}
