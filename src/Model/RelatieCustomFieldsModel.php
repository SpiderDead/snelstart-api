<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\CustomFieldModel;

final class RelatieCustomFieldsModel
{
    /** @var array<int, CustomFieldModel>|null */
    public ?array $klantCustomFields = null;

    /** @var array<int, CustomFieldModel>|null */
    public ?array $leverancierCustomFields = null;
}
