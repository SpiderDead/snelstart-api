<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Model;

use SpiderDead\SnelStartApi\Model\FactureerBuitenlandseBtwDateRangeModel;
use SpiderDead\SnelStartApi\Model\GrootboekIdentifierModel;
use SpiderDead\SnelStartApi\Model\KleineOndernemersRegelingModel;

final class CompanyInfoModel
{
    public ?int $aantalDecimalenArtikelaantallen = null;

    public ?int $aantalDecimalenArtikelprijzen = null;

    public ?int $aantalVoorloopnullenGrootboekrekeningen = null;

    public ?bool $abonnementOvernemen = null;

    public ?string $administratieIdentifier = null;

    public ?string $administratieNaam = null;

    public ?string $adres = null;

    public ?int $artikelcodeMaxLengte = null;

    public ?string $artikelcodeSoort = null;

    public ?bool $backorderGebruiken = null;

    public ?string $bankrekeningnummer = null;

    public ?string $bedrijfsnaam = null;

    public ?\DateTimeImmutable $begindatumVoorraadtelling = null;

    public ?int $beginmaandFiscaleBoekjaar = null;

    public ?string $bic = null;

    public ?string $btwAangiftePeriodeSoort = null;

    public ?string $btwIdentificatieNummer = null;

    public ?string $btwNummer = null;

    public ?string $btwNummerFiscaleEenheid = null;

    public ?float $btwPercentageAangifteKredietbeperking = null;

    public ?GrootboekIdentifierModel $buitenlandseBtwGrootboek = null;

    public ?string $contactpersoon = null;

    public ?GrootboekIdentifierModel $dagboekVoorraadverschillen = null;

    public ?bool $deelleveringOrdersDefaultAan = null;

    public ?float $drempelbedragVerkooporderbeheer = null;

    public ?int $drempelbedragVerkooporderbeheerMaxDagenUitstel = null;

    public ?string $email = null;

    public ?bool $factureerBuitenlandsBtw = null;

    /** @var array<int, FactureerBuitenlandseBtwDateRangeModel>|null */
    public ?array $factureerBuitenlandsBtwRanges = null;

    public ?bool $factuurAlsBijlageVerkoopboeking = null;

    public ?string $fax = null;

    public ?int $huidigBoekjaar = null;

    public ?string $iban = null;

    public ?string $icpAangiftePeriodeSoort = null;

    public ?bool $inkoopprijsArtikelbestandExclusiefBtw = null;

    public ?KleineOndernemersRegelingModel $kleineOndernemersregeling = null;

    public ?bool $kolomGeleverdAutomatischVullen = null;

    public ?string $kvKNummer = null;

    public ?string $mapUBLBestanden = null;

    public ?string $markeergedragInlezenBankafschriften = null;

    public ?string $mobieleTelefoon = null;

    public ?string $momentVoorraadBijwerken = null;

    public ?string $plaats = null;

    public ?string $postcode = null;

    public ?string $rechtsvorm = null;

    public ?string $regelkortingVerkooporder = null;

    public ?GrootboekIdentifierModel $rekeningTeOntvangenInkoopfacturen = null;

    public ?string $tekstregelsOvernemenNaarBackorder = null;

    public ?string $telefoon = null;

    public ?bool $tussentijdseSuppletiesBerekenen = null;

    public ?string $verkooporderVoorraadVanafNiveau = null;

    public ?bool $verkoopprijsArtikelbestandExclusiefBtw = null;

    public ?int $volgendContantbonnummer = null;

    public ?int $volgendFactuurnummer = null;

    public ?int $volgendInkoopordernummer = null;

    public ?int $volgendVerkoopordernummer = null;

    public ?bool $voorkeurenTijdensBoeken = null;

    public ?string $voorraadSysteem = null;

    public ?bool $voorraadTonenInZoekvenster = null;

    public ?bool $voorraadcontroleOrderinvoer = null;

    public ?bool $voorraadkolommenTonenInInkoop = null;

    public ?string $vrijeTekst1 = null;

    public ?string $vrijeTekst2 = null;

    public ?string $vrijeTekst3 = null;

    public ?string $vrijeTekst4 = null;

    public ?string $website = null;
}
