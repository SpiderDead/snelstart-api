<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SystemThreadingWaitHandle
{
    /** @var array<int, mixed>|null */
    public ?array $handle = null;

    public ?\SpiderDead\SnelStartApi\Model\MicrosoftWin32SafeHandlesSafeWaitHandle $safeWaitHandle = null;
}
