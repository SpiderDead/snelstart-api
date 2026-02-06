<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class MicrosoftDataODataQuerySemanticAstOrderByClause
{
    public ?string $direction = null;

    public ?\SpiderDead\SnelStartApi\Model\MicrosoftDataODataQuerySemanticAstSingleValueNode $expression = null;

    public ?\SpiderDead\SnelStartApi\Model\MicrosoftDataEdmIEdmTypeReference $itemType = null;

    public ?\SpiderDead\SnelStartApi\Model\MicrosoftDataODataQuerySemanticAstRangeVariable $rangeVariable = null;

    public ?\SpiderDead\SnelStartApi\Model\MicrosoftDataODataQuerySemanticAstOrderByClause $thenBy = null;
}
