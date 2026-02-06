<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SystemWebHttpODataQueryFilterQueryOption
{
    public ?\SpiderDead\SnelStartApi\Model\SystemWebHttpODataODataQueryContext $context = null;

    public ?\SpiderDead\SnelStartApi\Model\MicrosoftDataODataQuerySemanticAstFilterClause $filterClause = null;

    public ?string $rawValue = null;

    public ?\SpiderDead\SnelStartApi\Model\SystemWebHttpODataQueryValidatorsFilterQueryValidator $validator = null;
}
