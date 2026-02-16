<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\BoekjaarModel;
use SpiderDead\SnelStartApi\Model\BtwAangifteRubriekModel;

final class BtwAangifteModel
{
    public ?\DateTimeImmutable $aangiftePeriodeBeginDatum = null;

    public ?\DateTimeImmutable $betalenVoor = null;

    public ?string $betalingskenmerk = null;

    public ?BoekjaarModel $boekjaar = null;

    public ?string $btwAangiftePeriode = null;

    public ?string $btwAangifteStatus = null;

    public ?string $btwNummer = null;

    public ?float $btwPercentageHoog = null;

    public ?float $btwPercentageLaag = null;

    public ?float $btwPercentageOverig = null;

    public ?\DateTimeImmutable $datumTijdBerekening = null;

    public ?\DateTimeImmutable $datumTijdVerzending = null;

    public ?string $foutBericht = null;

    public ?string $id = null;

    public ?bool $isAangifteGeschat = null;

    public ?bool $isSuppletie = null;

    public ?BtwAangifteRubriekModel $rubriek1A = null;

    public ?BtwAangifteRubriekModel $rubriek1B = null;

    public ?BtwAangifteRubriekModel $rubriek1C = null;

    public ?BtwAangifteRubriekModel $rubriek1D = null;

    public ?BtwAangifteRubriekModel $rubriek1E = null;

    public ?BtwAangifteRubriekModel $rubriek2A = null;

    public ?BtwAangifteRubriekModel $rubriek3A = null;

    public ?BtwAangifteRubriekModel $rubriek3B = null;

    public ?BtwAangifteRubriekModel $rubriek3C = null;

    public ?BtwAangifteRubriekModel $rubriek4A = null;

    public ?BtwAangifteRubriekModel $rubriek4B = null;

    public ?BtwAangifteRubriekModel $rubriek5A = null;

    public ?BtwAangifteRubriekModel $rubriek5B = null;

    public ?BtwAangifteRubriekModel $rubriek5C = null;

    public ?BtwAangifteRubriekModel $rubriek5D = null;

    public ?BtwAangifteRubriekModel $rubriek5E = null;

    public ?BtwAangifteRubriekModel $rubriek5F = null;

    public ?BtwAangifteRubriekModel $rubriek5G = null;

    public ?string $uri = null;
}
