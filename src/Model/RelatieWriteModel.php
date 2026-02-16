<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;
final class RelatieWriteModel
{
    public ?\SpiderDead\SnelStartApi\Model\EmailVersturenModel $aanmaningEmailVersturen = null;

    public ?string $aanmaningsoort = null;

    public ?bool $bankieren = null;

    public ?\SpiderDead\SnelStartApi\Model\EmailVersturenModel $bestellingEmailVersturen = null;

    public ?\SpiderDead\SnelStartApi\Model\EmailVersturenModel $bevestigingsEmailVersturen = null;

    public ?string $bic = null;

    public ?string $btwNummer = null;

    public ?\SpiderDead\SnelStartApi\Model\AdresModel $correspondentieAdres = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\DocumentModel>|null */
    public ?array $documents = null;

    public ?string $email = null;

    /** @var array<int, \SpiderDead\SnelStartApi\Model\ExtraVeldArtikelModel>|null */
    public ?array $extraVeldenKlant = null;

    public ?\SpiderDead\SnelStartApi\Model\EmailVersturenModel $factuurEmailVersturen = null;

    public ?\SpiderDead\SnelStartApi\Model\RelatieIdentifierModel $factuurRelatie = null;

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

    public ?\SpiderDead\SnelStartApi\Model\EmailVersturenModel $offerteAanvraagEmailVersturen = null;

    public ?\SpiderDead\SnelStartApi\Model\EmailVersturenModel $offerteEmailVersturen = null;

    public ?string $oin = null;

    public ?int $relatiecode = null;

    /** @var array<int, string>|null */
    public ?array $relatiesoort = null;

    public ?string $telefoon = null;

    public ?bool $ublBestandAlsBijlage = null;

    public ?string $uri = null;

    public ?string $verkoopBoekingenUri = null;

    public ?\SpiderDead\SnelStartApi\Model\AdresModel $vestigingsAdres = null;

    public ?string $websiteUrl = null;
}
