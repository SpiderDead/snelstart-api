<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use SpiderDead\SnelStartApi\Config\ClientConfig;
use SpiderDead\SnelStartApi\Http\ApiTransport;
use SpiderDead\SnelStartApi\Http\JsonCodec;
use SpiderDead\SnelStartApi\Service\ActieprijzenService;
use SpiderDead\SnelStartApi\Service\ArtikelenService;
use SpiderDead\SnelStartApi\Service\ArtikelomzetgroepenService;
use SpiderDead\SnelStartApi\Service\AuthorizationService;
use SpiderDead\SnelStartApi\Service\BankafschriftbestandenService;
use SpiderDead\SnelStartApi\Service\BankboekingenService;
use SpiderDead\SnelStartApi\Service\BtwaangiftesService;
use SpiderDead\SnelStartApi\Service\BtwtarievenService;
use SpiderDead\SnelStartApi\Service\CompanyInfoService;
use SpiderDead\SnelStartApi\Service\DagboekenService;
use SpiderDead\SnelStartApi\Service\DocumentenService;
use SpiderDead\SnelStartApi\Service\EchoService;
use SpiderDead\SnelStartApi\Service\GrootboekenService;
use SpiderDead\SnelStartApi\Service\GrootboekmutatiesService;
use SpiderDead\SnelStartApi\Service\InkoopboekingenService;
use SpiderDead\SnelStartApi\Service\InkoopfacturenService;
use SpiderDead\SnelStartApi\Service\KasboekingenService;
use SpiderDead\SnelStartApi\Service\KostenplaatsenService;
use SpiderDead\SnelStartApi\Service\LandenService;
use SpiderDead\SnelStartApi\Service\MemoriaalboekingenService;
use SpiderDead\SnelStartApi\Service\OffertesService;
use SpiderDead\SnelStartApi\Service\PrijsafsprakenService;
use SpiderDead\SnelStartApi\Service\RapportagesService;
use SpiderDead\SnelStartApi\Service\RelatiesService;
use SpiderDead\SnelStartApi\Service\VatratedefinitionsService;
use SpiderDead\SnelStartApi\Service\VatratesService;
use SpiderDead\SnelStartApi\Service\VerkoopboekingenService;
use SpiderDead\SnelStartApi\Service\VerkoopfacturenService;
use SpiderDead\SnelStartApi\Service\VerkoopordersService;
use SpiderDead\SnelStartApi\Service\VerkoopordersjablonenService;
use Symfony\Component\Serializer\SerializerInterface;

final class SnelStartClient
{
    private ApiTransport $transport;

    /** @var array<string, object> */
    private array $services = [];

    public function __construct(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        ClientConfig $config,
        ?SerializerInterface $serializer = null
    ) {
        $codec = new JsonCodec($serializer);
        $this->transport = new ApiTransport($httpClient, $requestFactory, $streamFactory, $config, $codec);
    }

    /**
     * Create a client with default HTTP client and factories.
     * 
     * Requires symfony/http-client and nyholm/psr7 packages:
     *   composer require symfony/http-client nyholm/psr7
     */
    public static function create(ClientConfig $config, ?SerializerInterface $serializer = null): self
    {
        if (!class_exists('Symfony\Component\HttpClient\Psr18Client')) {
            throw new \RuntimeException(
                'symfony/http-client is required for SnelStartClient::create(). ' .
                'Install it with: composer require symfony/http-client nyholm/psr7'
            );
        }

        if (!class_exists('Nyholm\Psr7\Factory\Psr17Factory')) {
            throw new \RuntimeException(
                'nyholm/psr7 is required for SnelStartClient::create(). ' .
                'Install it with: composer require symfony/http-client nyholm/psr7'
            );
        }

        $httpClient = new \Symfony\Component\HttpClient\Psr18Client();
        $factory = new \Nyholm\Psr7\Factory\Psr17Factory();

        return new self($httpClient, $factory, $factory, $config, $serializer);
    }

    public function transport(): ApiTransport
    {
        return $this->transport;
    }

    public function actieprijzen(): ActieprijzenService
    {
        if (!isset($this->services['actieprijzen'])) {
            $this->services['actieprijzen'] = new ActieprijzenService($this->transport);
        }

        return $this->services['actieprijzen'];
    }

    public function artikelen(): ArtikelenService
    {
        if (!isset($this->services['artikelen'])) {
            $this->services['artikelen'] = new ArtikelenService($this->transport);
        }

        return $this->services['artikelen'];
    }

    public function artikelomzetgroepen(): ArtikelomzetgroepenService
    {
        if (!isset($this->services['artikelomzetgroepen'])) {
            $this->services['artikelomzetgroepen'] = new ArtikelomzetgroepenService($this->transport);
        }

        return $this->services['artikelomzetgroepen'];
    }

    public function authorization(): AuthorizationService
    {
        if (!isset($this->services['authorization'])) {
            $this->services['authorization'] = new AuthorizationService($this->transport);
        }

        return $this->services['authorization'];
    }

    public function bankafschriftbestanden(): BankafschriftbestandenService
    {
        if (!isset($this->services['bankafschriftbestanden'])) {
            $this->services['bankafschriftbestanden'] = new BankafschriftbestandenService($this->transport);
        }

        return $this->services['bankafschriftbestanden'];
    }

    public function bankboekingen(): BankboekingenService
    {
        if (!isset($this->services['bankboekingen'])) {
            $this->services['bankboekingen'] = new BankboekingenService($this->transport);
        }

        return $this->services['bankboekingen'];
    }

    public function btwaangiftes(): BtwaangiftesService
    {
        if (!isset($this->services['btwaangiftes'])) {
            $this->services['btwaangiftes'] = new BtwaangiftesService($this->transport);
        }

        return $this->services['btwaangiftes'];
    }

    public function btwtarieven(): BtwtarievenService
    {
        if (!isset($this->services['btwtarieven'])) {
            $this->services['btwtarieven'] = new BtwtarievenService($this->transport);
        }

        return $this->services['btwtarieven'];
    }

    public function companyInfo(): CompanyInfoService
    {
        if (!isset($this->services['companyInfo'])) {
            $this->services['companyInfo'] = new CompanyInfoService($this->transport);
        }

        return $this->services['companyInfo'];
    }

    public function dagboeken(): DagboekenService
    {
        if (!isset($this->services['dagboeken'])) {
            $this->services['dagboeken'] = new DagboekenService($this->transport);
        }

        return $this->services['dagboeken'];
    }

    public function documenten(): DocumentenService
    {
        if (!isset($this->services['documenten'])) {
            $this->services['documenten'] = new DocumentenService($this->transport);
        }

        return $this->services['documenten'];
    }

    public function echoService(): EchoService
    {
        if (!isset($this->services['echo'])) {
            $this->services['echo'] = new EchoService($this->transport);
        }

        return $this->services['echo'];
    }

    public function grootboeken(): GrootboekenService
    {
        if (!isset($this->services['grootboeken'])) {
            $this->services['grootboeken'] = new GrootboekenService($this->transport);
        }

        return $this->services['grootboeken'];
    }

    public function grootboekmutaties(): GrootboekmutatiesService
    {
        if (!isset($this->services['grootboekmutaties'])) {
            $this->services['grootboekmutaties'] = new GrootboekmutatiesService($this->transport);
        }

        return $this->services['grootboekmutaties'];
    }

    public function inkoopboekingen(): InkoopboekingenService
    {
        if (!isset($this->services['inkoopboekingen'])) {
            $this->services['inkoopboekingen'] = new InkoopboekingenService($this->transport);
        }

        return $this->services['inkoopboekingen'];
    }

    public function inkoopfacturen(): InkoopfacturenService
    {
        if (!isset($this->services['inkoopfacturen'])) {
            $this->services['inkoopfacturen'] = new InkoopfacturenService($this->transport);
        }

        return $this->services['inkoopfacturen'];
    }

    public function kasboekingen(): KasboekingenService
    {
        if (!isset($this->services['kasboekingen'])) {
            $this->services['kasboekingen'] = new KasboekingenService($this->transport);
        }

        return $this->services['kasboekingen'];
    }

    public function kostenplaatsen(): KostenplaatsenService
    {
        if (!isset($this->services['kostenplaatsen'])) {
            $this->services['kostenplaatsen'] = new KostenplaatsenService($this->transport);
        }

        return $this->services['kostenplaatsen'];
    }

    public function landen(): LandenService
    {
        if (!isset($this->services['landen'])) {
            $this->services['landen'] = new LandenService($this->transport);
        }

        return $this->services['landen'];
    }

    public function memoriaalboekingen(): MemoriaalboekingenService
    {
        if (!isset($this->services['memoriaalboekingen'])) {
            $this->services['memoriaalboekingen'] = new MemoriaalboekingenService($this->transport);
        }

        return $this->services['memoriaalboekingen'];
    }

    public function offertes(): OffertesService
    {
        if (!isset($this->services['offertes'])) {
            $this->services['offertes'] = new OffertesService($this->transport);
        }

        return $this->services['offertes'];
    }

    public function prijsafspraken(): PrijsafsprakenService
    {
        if (!isset($this->services['prijsafspraken'])) {
            $this->services['prijsafspraken'] = new PrijsafsprakenService($this->transport);
        }

        return $this->services['prijsafspraken'];
    }

    public function rapportages(): RapportagesService
    {
        if (!isset($this->services['rapportages'])) {
            $this->services['rapportages'] = new RapportagesService($this->transport);
        }

        return $this->services['rapportages'];
    }

    public function relaties(): RelatiesService
    {
        if (!isset($this->services['relaties'])) {
            $this->services['relaties'] = new RelatiesService($this->transport);
        }

        return $this->services['relaties'];
    }

    public function vatratedefinitions(): VatratedefinitionsService
    {
        if (!isset($this->services['vatratedefinitions'])) {
            $this->services['vatratedefinitions'] = new VatratedefinitionsService($this->transport);
        }

        return $this->services['vatratedefinitions'];
    }

    public function vatrates(): VatratesService
    {
        if (!isset($this->services['vatrates'])) {
            $this->services['vatrates'] = new VatratesService($this->transport);
        }

        return $this->services['vatrates'];
    }

    public function verkoopboekingen(): VerkoopboekingenService
    {
        if (!isset($this->services['verkoopboekingen'])) {
            $this->services['verkoopboekingen'] = new VerkoopboekingenService($this->transport);
        }

        return $this->services['verkoopboekingen'];
    }

    public function verkoopfacturen(): VerkoopfacturenService
    {
        if (!isset($this->services['verkoopfacturen'])) {
            $this->services['verkoopfacturen'] = new VerkoopfacturenService($this->transport);
        }

        return $this->services['verkoopfacturen'];
    }

    public function verkooporders(): VerkoopordersService
    {
        if (!isset($this->services['verkooporders'])) {
            $this->services['verkooporders'] = new VerkoopordersService($this->transport);
        }

        return $this->services['verkooporders'];
    }

    public function verkoopordersjablonen(): VerkoopordersjablonenService
    {
        if (!isset($this->services['verkoopordersjablonen'])) {
            $this->services['verkoopordersjablonen'] = new VerkoopordersjablonenService($this->transport);
        }

        return $this->services['verkoopordersjablonen'];
    }
}
