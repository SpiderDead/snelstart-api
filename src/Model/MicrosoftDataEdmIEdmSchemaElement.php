<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
use Symfony\Component\Serializer\Attribute\SerializedName;

final class MicrosoftDataEdmIEdmSchemaElement
{
    public ?string $name = null;

    #[SerializedName('namespace')]
    public ?string $namespaceField = null;

    public ?string $schemaElementKind = null;
}
