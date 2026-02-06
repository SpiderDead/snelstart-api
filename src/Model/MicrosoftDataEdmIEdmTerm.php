<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
use Symfony\Component\Serializer\Attribute\SerializedName;

final class MicrosoftDataEdmIEdmTerm
{
    public ?string $name = null;

    #[SerializedName('namespace')]
    public ?string $namespaceField = null;

    public ?string $schemaElementKind = null;

    public ?string $termKind = null;
}
