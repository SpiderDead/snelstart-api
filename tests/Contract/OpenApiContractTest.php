<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Tests\Contract;

use PHPUnit\Framework\TestCase;
use SpiderDead\SnelStartApi\Generated\OperationMap;
use SpiderDead\SnelStartApi\Generated\SchemaMap;

final class OpenApiContractTest extends TestCase
{
    public function testOperationCountMatchesSpec(): void
    {
        self::assertCount(96, OperationMap::all());
    }

    public function testSchemaCountMatchesSpec(): void
    {
        self::assertCount(237, SchemaMap::all());
    }

    public function testMappedModelClassesExist(): void
    {
        foreach (SchemaMap::all() as $className) {
            self::assertTrue(class_exists($className), sprintf('Missing generated class: %s', $className));
        }
    }
}
