<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Tests\Unit;

use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use SpiderDead\SnelStartApi\Auth\AuthMode;
use SpiderDead\SnelStartApi\Config\ClientConfig;
use SpiderDead\SnelStartApi\Generated\OperationMap;
use SpiderDead\SnelStartApi\Http\ApiTransport;
use SpiderDead\SnelStartApi\Http\JsonCodec;
use SpiderDead\SnelStartApi\Tests\Support\FakeHttpClient;

final class ApiTransportAuthTest extends TestCase
{
    public function testHeaderAuthModeSendsSubscriptionHeader(): void
    {
        $http = new FakeHttpClient(new Response(204));
        $factory = new Psr17Factory();
        $transport = new ApiTransport(
            $http,
            $factory,
            $factory,
            new ClientConfig('secret-key', authMode: AuthMode::HEADER),
            new JsonCodec()
        );

        $transport->execute($this->operationWithoutPathParams());

        $request = $http->lastRequest();
        self::assertSame('secret-key', $request->getHeaderLine('Ocp-Apim-Subscription-Key'));
        self::assertStringNotContainsString('subscription-key=', (string) $request->getUri());
    }

    public function testQueryAuthModeSendsSubscriptionQueryParameter(): void
    {
        $http = new FakeHttpClient(new Response(204));
        $factory = new Psr17Factory();
        $transport = new ApiTransport(
            $http,
            $factory,
            $factory,
            new ClientConfig('secret-key', authMode: AuthMode::QUERY),
            new JsonCodec()
        );

        $transport->execute($this->operationWithoutPathParams());

        $request = $http->lastRequest();
        self::assertSame('', $request->getHeaderLine('Ocp-Apim-Subscription-Key'));
        self::assertStringContainsString('subscription-key=secret-key', (string) $request->getUri());
    }

    private function operationWithoutPathParams(): string
    {
        foreach (OperationMap::all() as $operationId => $meta) {
            if (!str_contains($meta['path'], '{')) {
                return $operationId;
            }
        }

        self::fail('No operation without path parameters found.');
    }
}
