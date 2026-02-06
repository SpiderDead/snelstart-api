<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsVerkoopordersjablonenVerkoopOrderSjabloonModel
{
    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersjablonenIngaveGegevenSjabloonModel>|null */
    public ?array $extraHoofdVelden = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsVerkoopordersjablonenIngaveGegevenSjabloonModel>|null */
    public ?array $extraRegelVelden = null;

    public ?string $id = null;

    public ?bool $nieuweOrdersBlokkeren = null;

    public ?bool $nonactief = null;

    public ?string $omschrijving = null;

    public ?bool $prijsIngaveExclusiefBtw = null;

    public ?string $uri = null;
}
