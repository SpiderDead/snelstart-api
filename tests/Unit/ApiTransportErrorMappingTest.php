<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Tests\Unit;

use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use SpiderDead\SnelStartApi\Config\ClientConfig;
use SpiderDead\SnelStartApi\Exception\NotFoundException;
use SpiderDead\SnelStartApi\Generated\OperationMap;
use SpiderDead\SnelStartApi\Http\ApiTransport;
use SpiderDead\SnelStartApi\Http\JsonCodec;
use SpiderDead\SnelStartApi\Tests\Support\FakeHttpClient;

final class ApiTransportErrorMappingTest extends TestCase
{
    public function testNotFoundMappedToTypedException(): void
    {
        $http = new FakeHttpClient(new Response(404, ['Content-Type' => 'application/json'], '{"message":"Not found"}'));
        $factory = new Psr17Factory();
        $transport = new ApiTransport(
            $http,
            $factory,
            $factory,
            new ClientConfig('secret-key'),
            new JsonCodec()
        );

        $this->expectException(NotFoundException::class);
        $transport->execute($this->operationWithoutPathParams());
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
