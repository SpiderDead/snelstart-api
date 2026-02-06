<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class MicrosoftDataEdmIEdmModel
{
    public ?\SpiderDead\SnelStartApi\Model\MicrosoftDataEdmAnnotationsIEdmDirectValueAnnotationsManager $directValueAnnotationsManager = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\MicrosoftDataEdmIEdmModel>|null */
    public ?array $referencedModels = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\MicrosoftDataEdmIEdmSchemaElement>|null */
    public ?array $schemaElements = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\MicrosoftDataEdmAnnotationsIEdmVocabularyAnnotation>|null */
    public ?array $vocabularyAnnotations = null;
}
