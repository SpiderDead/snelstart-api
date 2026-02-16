<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class EmailVersturenModel
{
    public ?string $ccEmail = null;

    public ?string $email = null;

    public ?bool $shouldSend = null;
}
