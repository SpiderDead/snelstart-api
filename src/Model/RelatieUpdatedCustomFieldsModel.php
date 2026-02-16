<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class RelatieUpdatedCustomFieldsModel
{
    /** @var array<int, \SpiderDead\SnelStartApi\Model\UpdatedCustomFieldModel>|null */
    public ?array $klantCustomFields = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\UpdatedCustomFieldModel>|null */
    public ?array $leverancierCustomFields = null;
}
