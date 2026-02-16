<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Generated;

use InvalidArgumentException;

final class OperationMap
{
    /** @var array<string, array{method: string, path: string, response_kind: string, response_type: string}> */
    private const OPERATIONS = [
        'v2-actieprijzen-GET-OData' => [
            'method' => 'GET',
            'path' => '/actieprijzen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\ActieprijzenModel>',
        ],
        'v2-artikelen-GET-OData' => [
            'method' => 'GET',
            'path' => '/artikelen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\ArtikelQueryModel>',
        ],
        'v2-artikelen-POST' => [
            'method' => 'POST',
            'path' => '/artikelen',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\ArtikelModel',
        ],
        'v2-artikelen-id-DELETE' => [
            'method' => 'DELETE',
            'path' => '/artikelen/{id}',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-artikelen-id-GET' => [
            'method' => 'GET',
            'path' => '/artikelen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\ArtikelQueryModel',
        ],
        'v2-artikelen-id-PUT' => [
            'method' => 'PUT',
            'path' => '/artikelen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\ArtikelModel',
        ],
        'v2-artikelen-id-customFields-GET' => [
            'method' => 'GET',
            'path' => '/artikelen/{id}/customFields',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\CustomFieldDto>',
        ],
        'v2-artikelen-id-customFields-PUT' => [
            'method' => 'PUT',
            'path' => '/artikelen/{id}/customFields',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\CustomFieldDto>',
        ],
        'v2-artikelen-prijsafspraken-GET-OData' => [
            'method' => 'GET',
            'path' => '/artikelen/prijsafspraken',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\ArtikelPrijsAfsprakenModel>',
        ],
        'v2-artikelomzetgroepen-GET' => [
            'method' => 'GET',
            'path' => '/artikelomzetgroepen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\ArtikelOmzetGroepModel>',
        ],
        'v2-artikelomzetgroepen-id-GET' => [
            'method' => 'GET',
            'path' => '/artikelomzetgroepen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\ArtikelOmzetGroepModel',
        ],
        'v2-authorization-HasUserAccessToAdministration-GET' => [
            'method' => 'GET',
            'path' => '/authorization/HasUserAccessToAdministration',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\AdministrationAccessModel',
        ],
        'v2-bankafschriftbestanden-POST' => [
            'method' => 'POST',
            'path' => '/bankafschriftbestanden',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\BankafschriftBestandResponse>',
        ],
        'v2-bankboekingen-GET-OData' => [
            'method' => 'GET',
            'path' => '/bankboekingen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\BankboekingModel>',
        ],
        'v2-bankboekingen-POST' => [
            'method' => 'POST',
            'path' => '/bankboekingen',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\BankboekingModel',
        ],
        'v2-bankboekingen-id-DELETE' => [
            'method' => 'DELETE',
            'path' => '/bankboekingen/{id}',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-bankboekingen-id-GET' => [
            'method' => 'GET',
            'path' => '/bankboekingen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\BankboekingModel',
        ],
        'v2-bankboekingen-id-PUT' => [
            'method' => 'PUT',
            'path' => '/bankboekingen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\BankboekingModel',
        ],
        'v2-btwaangiftes-GET-OData' => [
            'method' => 'GET',
            'path' => '/btwaangiftes',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\BtwAangifteModel>',
        ],
        'v2-btwaangiftes-id-GET' => [
            'method' => 'GET',
            'path' => '/btwaangiftes/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\BtwAangifteModel',
        ],
        'v2-btwaangiftes-id-externAangeven-PUT' => [
            'method' => 'PUT',
            'path' => '/btwaangiftes/{id}/externAangeven',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-btwtarieven-GET' => [
            'method' => 'GET',
            'path' => '/btwtarieven',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\BtwTariefModel>',
        ],
        'v2-companyInfo-GET' => [
            'method' => 'GET',
            'path' => '/companyInfo',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\CompanyInfoModel',
        ],
        'v2-companyInfo-PUT' => [
            'method' => 'PUT',
            'path' => '/companyInfo',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\CompanyInfoModel',
        ],
        'v2-dagboeken-GET' => [
            'method' => 'GET',
            'path' => '/dagboeken',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\DagboekModel>',
        ],
        'v2-documenten-documenttype-POST' => [
            'method' => 'POST',
            'path' => '/documenten/{documenttype}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\DocumentIdentifierModel',
        ],
        'v2-documenten-documenttype-pid-GET' => [
            'method' => 'GET',
            'path' => '/documenten/{documenttype}/{pid}',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\VerkoopBoekingBijlageReferenceModel>',
        ],
        'v2-documenten-id-DELETE' => [
            'method' => 'DELETE',
            'path' => '/documenten/{id}',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-documenten-id-GET' => [
            'method' => 'GET',
            'path' => '/documenten/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\DocumentContentModel',
        ],
        'v2-documenten-id-PUT' => [
            'method' => 'PUT',
            'path' => '/documenten/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\DocumentIdentifierModel',
        ],
        'v2-echo-input-GET' => [
            'method' => 'GET',
            'path' => '/echo/{input}',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-grootboeken-GET-OData' => [
            'method' => 'GET',
            'path' => '/grootboeken',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\GrootboekModel>',
        ],
        'v2-grootboeken-POST' => [
            'method' => 'POST',
            'path' => '/grootboeken',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\GrootboekModel',
        ],
        'v2-grootboeken-id-GET' => [
            'method' => 'GET',
            'path' => '/grootboeken/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\GrootboekModel',
        ],
        'v2-grootboekmutaties-GET-OData' => [
            'method' => 'GET',
            'path' => '/grootboekmutaties',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\GrootboekMutatieModel>',
        ],
        'v2-grootboekmutaties-id-GET' => [
            'method' => 'GET',
            'path' => '/grootboekmutaties/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\GrootboekMutatieModel',
        ],
        'v2-inkoopboekingen-CreateFromAttachment-POST' => [
            'method' => 'POST',
            'path' => '/inkoopboekingen/CreateFromAttachment',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\CreateFromAttachmentModel',
        ],
        'v2-inkoopboekingen-GetCreateFromAttachmentStatus-GET' => [
            'method' => 'GET',
            'path' => '/inkoopboekingen/GetCreateFromAttachmentStatus',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\CreateFromAttachmentStatusModel',
        ],
        'v2-inkoopboekingen-POST' => [
            'method' => 'POST',
            'path' => '/inkoopboekingen',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\InkoopboekingModel',
        ],
        'v2-inkoopboekingen-id-DELETE' => [
            'method' => 'DELETE',
            'path' => '/inkoopboekingen/{id}',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-inkoopboekingen-id-GET' => [
            'method' => 'GET',
            'path' => '/inkoopboekingen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\InkoopboekingModel',
        ],
        'v2-inkoopboekingen-id-PUT' => [
            'method' => 'PUT',
            'path' => '/inkoopboekingen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\InkoopboekingModel',
        ],
        'v2-inkoopboekingen-ubl-POST' => [
            'method' => 'POST',
            'path' => '/inkoopboekingen/ubl',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\InkoopboekingModel',
        ],
        'v2-inkoopfacturen-GET-OData' => [
            'method' => 'GET',
            'path' => '/inkoopfacturen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\InkoopfactuurModel>',
        ],
        'v2-kasboekingen-GET-OData' => [
            'method' => 'GET',
            'path' => '/kasboekingen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\KasboekingModel>',
        ],
        'v2-kasboekingen-POST' => [
            'method' => 'POST',
            'path' => '/kasboekingen',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\KasboekingModel',
        ],
        'v2-kasboekingen-id-DELETE' => [
            'method' => 'DELETE',
            'path' => '/kasboekingen/{id}',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-kasboekingen-id-GET' => [
            'method' => 'GET',
            'path' => '/kasboekingen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\KasboekingModel',
        ],
        'v2-kasboekingen-id-PUT' => [
            'method' => 'PUT',
            'path' => '/kasboekingen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\KasboekingModel',
        ],
        'v2-kostenplaatsen-GET' => [
            'method' => 'GET',
            'path' => '/kostenplaatsen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\KostenplaatsModel>',
        ],
        'v2-kostenplaatsen-POST' => [
            'method' => 'POST',
            'path' => '/kostenplaatsen',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\KostenplaatsModel',
        ],
        'v2-kostenplaatsen-id-DELETE' => [
            'method' => 'DELETE',
            'path' => '/kostenplaatsen/{id}',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-kostenplaatsen-id-GET' => [
            'method' => 'GET',
            'path' => '/kostenplaatsen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\KostenplaatsModel',
        ],
        'v2-kostenplaatsen-id-PUT' => [
            'method' => 'PUT',
            'path' => '/kostenplaatsen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\KostenplaatsModel',
        ],
        'v2-landen-GET' => [
            'method' => 'GET',
            'path' => '/landen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\LandModel>',
        ],
        'v2-landen-id-GET' => [
            'method' => 'GET',
            'path' => '/landen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\LandModel',
        ],
        'v2-memoriaalboekingen-POST' => [
            'method' => 'POST',
            'path' => '/memoriaalboekingen',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\MemoriaalboekingModel',
        ],
        'v2-memoriaalboekingen-id-DELETE' => [
            'method' => 'DELETE',
            'path' => '/memoriaalboekingen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\MemoriaalboekingModel',
        ],
        'v2-memoriaalboekingen-id-GET' => [
            'method' => 'GET',
            'path' => '/memoriaalboekingen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\MemoriaalboekingModel',
        ],
        'v2-memoriaalboekingen-id-PUT' => [
            'method' => 'PUT',
            'path' => '/memoriaalboekingen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\MemoriaalboekingModel',
        ],
        'v2-offertes-GET-OData' => [
            'method' => 'GET',
            'path' => '/offertes',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\OfferteModel>',
        ],
        'v2-offertes-POST' => [
            'method' => 'POST',
            'path' => '/offertes',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\OfferteModel',
        ],
        'v2-offertes-id-DELETE' => [
            'method' => 'DELETE',
            'path' => '/offertes/{id}',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-offertes-id-GET' => [
            'method' => 'GET',
            'path' => '/offertes/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\OfferteModel',
        ],
        'v2-offertes-id-PUT' => [
            'method' => 'PUT',
            'path' => '/offertes/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\OfferteModel',
        ],
        'v2-prijsafspraken-GET-OData' => [
            'method' => 'GET',
            'path' => '/prijsafspraken',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\PrijsafspraakModel2>',
        ],
        'v2-rapportages-kolommenbalans-GET' => [
            'method' => 'GET',
            'path' => '/rapportages/kolommenbalans',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\KolommenbalansRegelModel>',
        ],
        'v2-rapportages-periodebalans-GET' => [
            'method' => 'GET',
            'path' => '/rapportages/periodebalans',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\PeriodebalansRegelModel>',
        ],
        'v2-relaties-GET-OData' => [
            'method' => 'GET',
            'path' => '/relaties',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\RelatieModel>',
        ],
        'v2-relaties-POST' => [
            'method' => 'POST',
            'path' => '/relaties',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\RelatieWriteModel',
        ],
        'v2-relaties-id-DELETE' => [
            'method' => 'DELETE',
            'path' => '/relaties/{id}',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-relaties-id-GET' => [
            'method' => 'GET',
            'path' => '/relaties/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\RelatieModel',
        ],
        'v2-relaties-id-PUT' => [
            'method' => 'PUT',
            'path' => '/relaties/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\RelatieWriteModel',
        ],
        'v2-relaties-id-customFields-GET' => [
            'method' => 'GET',
            'path' => '/relaties/{id}/customFields',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\RelatieCustomFieldsModel',
        ],
        'v2-relaties-id-customFields-PUT' => [
            'method' => 'PUT',
            'path' => '/relaties/{id}/customFields',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\RelatieCustomFieldsModel',
        ],
        'v2-relaties-id-doorlopendeincassomachtigingen-GET' => [
            'method' => 'GET',
            'path' => '/relaties/{id}/doorlopendeincassomachtigingen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\DoorlopendeIncassoMachtigingModel>',
        ],
        'v2-relaties-id-inkoopboekingen-GET' => [
            'method' => 'GET',
            'path' => '/relaties/{id}/inkoopboekingen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\InkoopboekingModel>',
        ],
        'v2-relaties-id-verkoopboekingen-GET' => [
            'method' => 'GET',
            'path' => '/relaties/{id}/verkoopboekingen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\VerkoopBoekingModel>',
        ],
        'v2-vatratedefinitions-GET-OData' => [
            'method' => 'GET',
            'path' => '/vatratedefinitions',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\VatRateDefinitionModel>',
        ],
        'v2-vatrates-GET-OData' => [
            'method' => 'GET',
            'path' => '/vatrates',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\VatRatesModel>',
        ],
        'v2-vatrates-id-GET' => [
            'method' => 'GET',
            'path' => '/vatrates/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\VatRatesModel',
        ],
        'v2-verkoopboekingen-POST' => [
            'method' => 'POST',
            'path' => '/verkoopboekingen',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\VerkoopBoekingModel',
        ],
        'v2-verkoopboekingen-id-DELETE' => [
            'method' => 'DELETE',
            'path' => '/verkoopboekingen/{id}',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-verkoopboekingen-id-GET' => [
            'method' => 'GET',
            'path' => '/verkoopboekingen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\VerkoopBoekingModel',
        ],
        'v2-verkoopboekingen-id-PUT' => [
            'method' => 'PUT',
            'path' => '/verkoopboekingen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\VerkoopBoekingModel',
        ],
        'v2-verkoopfacturen-GET-OData' => [
            'method' => 'GET',
            'path' => '/verkoopfacturen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\VerkoopfactuurModel>',
        ],
        'v2-verkoopfacturen-id-GET' => [
            'method' => 'GET',
            'path' => '/verkoopfacturen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\VerkoopfactuurModel',
        ],
        'v2-verkoopfacturen-id-ubl-GET' => [
            'method' => 'GET',
            'path' => '/verkoopfacturen/{id}/ubl',
            'response_kind' => 'array',
            'response_type' => 'array',
        ],
        'v2-verkooporders-GET-OData' => [
            'method' => 'GET',
            'path' => '/verkooporders',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\VerkoopOrderModel>',
        ],
        'v2-verkooporders-POST' => [
            'method' => 'POST',
            'path' => '/verkooporders',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\VerkoopOrderModel',
        ],
        'v2-verkooporders-id-DELETE' => [
            'method' => 'DELETE',
            'path' => '/verkooporders/{id}',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-verkooporders-id-GET' => [
            'method' => 'GET',
            'path' => '/verkooporders/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\VerkoopOrderModel',
        ],
        'v2-verkooporders-id-PUT' => [
            'method' => 'PUT',
            'path' => '/verkooporders/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\VerkoopOrderModel',
        ],
        'v2-verkooporders-id-ProcesStatus-PUT' => [
            'method' => 'PUT',
            'path' => '/verkooporders/{id}/ProcesStatus',
            'response_kind' => 'none',
            'response_type' => '',
        ],
        'v2-verkoopordersjablonen-GET' => [
            'method' => 'GET',
            'path' => '/verkoopordersjablonen',
            'response_kind' => 'array',
            'response_type' => 'array<\\SpiderDead\\SnelStartApi\\Model\\VerkoopOrderSjabloonModel>',
        ],
        'v2-verkoopordersjablonen-id-GET' => [
            'method' => 'GET',
            'path' => '/verkoopordersjablonen/{id}',
            'response_kind' => 'class',
            'response_type' => '\\SpiderDead\\SnelStartApi\\Model\\VerkoopOrderSjabloonModel',
        ],
    ];

    /** @return array{method: string, path: string, response_kind: string, response_type: string} */
    public static function get(string $operationId): array
    {
        if (!isset(self::OPERATIONS[$operationId])) {
            throw new InvalidArgumentException(sprintf('Unknown operation id: %s', $operationId));
        }

        return self::OPERATIONS[$operationId];
    }

    /** @return array<string, array{method: string, path: string, response_kind: string, response_type: string}> */
    public static function all(): array
    {
        return self::OPERATIONS;
    }
}
