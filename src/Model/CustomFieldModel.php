<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\CustomFieldDefinitionModel;

final class CustomFieldModel
{
    public ?CustomFieldDefinitionModel $definition = null;

    /** @var array<int, mixed>|null */
    public ?array $value = null;
}
