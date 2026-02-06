<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Auth;

final class AuthMode
{
    public const HEADER = 'header';
    public const QUERY = 'query';

    private function __construct()
    {
    }
}
