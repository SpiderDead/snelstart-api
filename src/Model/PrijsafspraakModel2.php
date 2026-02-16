<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class PrijsafspraakModel2
{
    public ?float $aantal = null;

    public ?\SpiderDead\SnelStartApi\Model\ArtikelIdentifierModel $artikel = null;

    public ?float $basisprijs = null;

    public ?\DateTimeImmutable $datum = null;

    public ?\DateTimeImmutable $datumTotEnMet = null;

    public ?\DateTimeImmutable $datumVanaf = null;

    public ?float $korting = null;

    public ?string $prijsBepalingSoort = null;

    public ?\SpiderDead\SnelStartApi\Model\RelatieIdentifierModel $relatie = null;

    public ?float $verkoopprijs = null;
}
