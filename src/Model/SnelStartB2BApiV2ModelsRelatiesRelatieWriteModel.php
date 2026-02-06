<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class SnelStartB2BApiV2ModelsRelatiesRelatieWriteModel
{
    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesEmailVersturenModel $aanmaningEmailVersturen = null;

    public ?string $aanmaningsoort = null;

    public ?bool $bankieren = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesEmailVersturenModel $bestellingEmailVersturen = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesEmailVersturenModel $bevestigingsEmailVersturen = null;

    public ?string $bic = null;

    public ?string $btwNummer = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesAdresModel $correspondentieAdres = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsDocumentenDocumentModel>|null */
    public ?array $documents = null;

    public ?string $email = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesExtraVeldRelatieModel>|null */
    public ?array $extraVeldenKlant = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesEmailVersturenModel $factuurEmailVersturen = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesRelatieIdentifierModel $factuurRelatie = null;

    public ?float $factuurkorting = null;

    public ?string $iban = null;

    public ?string $id = null;

    public ?string $incassoSoort = null;

    public ?string $inkoopBoekingenUri = null;

    public ?float $kredietLimiet = null;

    public ?int $krediettermijn = null;

    public ?string $kvkNummer = null;

    public ?string $memo = null;

    public ?string $mobieleTelefoon = null;

    public ?\DateTimeImmutable $modifiedOn = null;

    public ?string $naam = null;

    public ?bool $nonactief = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesEmailVersturenModel $offerteAanvraagEmailVersturen = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesEmailVersturenModel $offerteEmailVersturen = null;

    public ?string $oin = null;

    public ?int $relatiecode = null;

    /** @var array<int, string>|null */
    public ?array $relatiesoort = null;

    public ?string $telefoon = null;

    public ?bool $ublBestandAlsBijlage = null;

    public ?string $uri = null;

    public ?string $verkoopBoekingenUri = null;

    public ?\SpiderDead\SnelStartApi\Model\SnelStartB2BApiV2ModelsRelatiesAdresModel $vestigingsAdres = null;

    public ?string $websiteUrl = null;
}
