<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsPrijsafsprakenPrijsafspraakModel
{
    public ?float $aantal = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsArtikelenArtikelIdentifierModel $artikel = null;

    public ?float $basisprijs = null;

    public ?\DateTimeImmutable $datum = null;

    public ?\DateTimeImmutable $datumTotEnMet = null;

    public ?\DateTimeImmutable $datumVanaf = null;

    public ?float $korting = null;

    public ?string $prijsBepalingSoort = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieIdentifierModel $relatie = null;

    public ?float $verkoopprijs = null;
}
