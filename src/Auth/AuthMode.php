<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Auth;

enum AuthMode: string
{
    case Header = 'header';
    case Query = 'query';
}
