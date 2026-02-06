<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SystemWebHttpODataQuerySelectExpandQueryOption
{
    public ?\SpiderDead\SnelStartApi\Model\SystemWebHttpODataODataQueryContext $context = null;

    public ?string $rawExpand = null;

    public ?string $rawSelect = null;

    public ?\SpiderDead\SnelStartApi\Model\MicrosoftDataODataQuerySemanticAstSelectExpandClause $selectExpandClause = null;

    public ?\SpiderDead\SnelStartApi\Model\SystemWebHttpODataQueryValidatorsSelectExpandQueryValidator $validator = null;
}
