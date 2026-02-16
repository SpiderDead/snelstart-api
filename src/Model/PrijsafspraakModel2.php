<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\ArtikelIdentifierModel;
use SpiderDead\SnelStartApi\Model\RelatieIdentifierModel;

final class PrijsafspraakModel2
{
    public ?float $aantal = null;

    public ?ArtikelIdentifierModel $artikel = null;

    public ?float $basisprijs = null;

    public ?\DateTimeImmutable $datum = null;

    public ?\DateTimeImmutable $datumTotEnMet = null;

    public ?\DateTimeImmutable $datumVanaf = null;

    public ?float $korting = null;

    public ?string $prijsBepalingSoort = null;

    public ?RelatieIdentifierModel $relatie = null;

    public ?float $verkoopprijs = null;
}
