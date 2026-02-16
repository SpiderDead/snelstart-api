<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

final class UpdatedCustomFieldModel
{
    public ?string $name = null;

    /** @var array<int, mixed>|null */
    public ?array $value = null;
}
