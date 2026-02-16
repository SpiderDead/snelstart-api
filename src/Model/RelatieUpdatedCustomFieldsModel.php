<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\UpdatedCustomFieldModel;

final class RelatieUpdatedCustomFieldsModel
{
    /** @var array<int, UpdatedCustomFieldModel>|null */
    public ?array $klantCustomFields = null;

    /** @var array<int, UpdatedCustomFieldModel>|null */
    public ?array $leverancierCustomFields = null;
}
