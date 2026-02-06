<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Tests\Smoke;

use Nyholm\Psr7\Factory\Psr17Factory;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;
use SpiderDead\SnelStartApi\Config\ClientConfig;
use SpiderDead\SnelStartApi\Http\ApiTransport;
use SpiderDead\SnelStartApi\Http\JsonCodec;
use Symfony\Component\HttpClient\Psr18Client;

final class CompanyInfoSmokeTest extends TestCase
{
    #[Group('smoke')]
    public function testCompanyInfoEndpointResponds(): void
    {
        $apiKey = getenv('SNELSTART_API_KEY');
        if ($apiKey === false || $apiKey === '') {
            self::markTestSkipped('SNELSTART_API_KEY is required for smoke tests.');
        }

        $factory = new Psr17Factory();
        $transport = new ApiTransport(
            new Psr18Client(),
            $factory,
            $factory,
            new ClientConfig(
                apiKey: $apiKey,
                baseUri: getenv('SNELSTART_BASE_URI') ?: 'https://b2bapi.snelstart.nl/v2'
            ),
            new JsonCodec()
        );

        $result = $transport->execute('v2-companyInfo-GET');
        self::assertNotNull($result);
    }
}
