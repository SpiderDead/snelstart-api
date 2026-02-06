<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SystemWebHttpODataQueryOrderByQueryOption
{
    public ?\SpiderDead\SnelStartApi\Model\SystemWebHttpODataODataQueryContext $context = null;

    public ?\SpiderDead\SnelStartApi\Model\MicrosoftDataODataQuerySemanticAstOrderByClause $orderByClause = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SystemWebHttpODataQueryOrderByNode>|null */
    public ?array $orderByNodes = null;

    public ?string $rawValue = null;

    public ?\SpiderDead\SnelStartApi\Model\SystemWebHttpODataQueryValidatorsOrderByQueryValidator $validator = null;
}
