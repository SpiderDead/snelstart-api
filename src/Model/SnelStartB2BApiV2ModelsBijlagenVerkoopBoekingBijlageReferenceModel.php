<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
use Symfony\Component\Serializer\Attribute\SerializedName;

final class SnelStartB2BApiV2ModelsBijlagenVerkoopBoekingBijlageReferenceModel
{
    public ?string $fileName = null;

    public ?string $id = null;

    #[SerializedName('readOnly')]
    public ?bool $readOnlyField = null;

    public ?string $uri = null;

    public ?string $verkoopBoekingId = null;
}
