<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SystemThreadingCancellationToken
{
    public ?bool $canBeCanceled = null;

    public ?bool $isCancellationRequested = null;

    public ?\SpiderDead\SnelStartApi\Model\SystemThreadingWaitHandle $waitHandle = null;
}
