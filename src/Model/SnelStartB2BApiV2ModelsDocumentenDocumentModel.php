<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
use Symfony\Component\Serializer\Attribute\SerializedName;

final class SnelStartB2BApiV2ModelsDocumentenDocumentModel
{
    public ?string $fileName = null;

    public ?string $id = null;

    public ?string $parentIdentifier = null;

    #[SerializedName('readOnly')]
    public ?bool $readOnlyField = null;

    public ?string $uri = null;
}
