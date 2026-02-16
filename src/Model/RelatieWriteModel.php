<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\AdresModel;
use SpiderDead\SnelStartApi\Model\DocumentModel;
use SpiderDead\SnelStartApi\Model\EmailVersturenModel;
use SpiderDead\SnelStartApi\Model\ExtraVeldArtikelModel;
use SpiderDead\SnelStartApi\Model\RelatieIdentifierModel;

final class RelatieWriteModel
{
    public ?EmailVersturenModel $aanmaningEmailVersturen = null;

    public ?string $aanmaningsoort = null;

    public ?bool $bankieren = null;

    public ?EmailVersturenModel $bestellingEmailVersturen = null;

    public ?EmailVersturenModel $bevestigingsEmailVersturen = null;

    public ?string $bic = null;

    public ?string $btwNummer = null;

    public ?AdresModel $correspondentieAdres = null;

    /** @var array<int, DocumentModel>|null */
    public ?array $documents = null;

    public ?string $email = null;

    /** @var array<int, ExtraVeldArtikelModel>|null */
    public ?array $extraVeldenKlant = null;

    public ?EmailVersturenModel $factuurEmailVersturen = null;

    public ?RelatieIdentifierModel $factuurRelatie = null;

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

    public ?EmailVersturenModel $offerteAanvraagEmailVersturen = null;

    public ?EmailVersturenModel $offerteEmailVersturen = null;

    public ?string $oin = null;

    public ?int $relatiecode = null;

    /** @var array<int, string>|null */
    public ?array $relatiesoort = null;

    public ?string $telefoon = null;

    public ?bool $ublBestandAlsBijlage = null;

    public ?string $uri = null;

    public ?string $verkoopBoekingenUri = null;

    public ?AdresModel $vestigingsAdres = null;

    public ?string $websiteUrl = null;
}
