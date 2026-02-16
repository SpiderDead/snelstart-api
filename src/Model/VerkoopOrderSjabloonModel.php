<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\IngaveGegevenSjabloonModel;

final class VerkoopOrderSjabloonModel
{
    /** @var array<int, IngaveGegevenSjabloonModel>|null */
    public ?array $extraHoofdVelden = null;

    /** @var array<int, IngaveGegevenSjabloonModel>|null */
    public ?array $extraRegelVelden = null;

    public ?string $id = null;

    public ?bool $nieuweOrdersBlokkeren = null;

    public ?bool $nonactief = null;

    public ?string $omschrijving = null;

    public ?bool $prijsIngaveExclusiefBtw = null;

    public ?string $uri = null;
}
