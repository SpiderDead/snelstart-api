<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class RelatieCustomFieldsModel
{
    /** @var array<int, \SpiderDead\SnelStartApi\Model\CustomFieldModel>|null */
    public ?array $klantCustomFields = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\CustomFieldModel>|null */
    public ?array $leverancierCustomFields = null;
}
