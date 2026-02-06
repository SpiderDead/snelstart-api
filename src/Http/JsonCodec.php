<?php

declare(strict_types=1);

namespace SpiderDead\SnelStartApi\Http;

use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

final class JsonCodec
{
    private SerializerInterface $serializer;

    public function __construct(?SerializerInterface $serializer = null)
    {
        $this->serializer = $serializer ?? new Serializer(
            [
                new DateTimeNormalizer([DateTimeNormalizer::FORMAT_KEY => DATE_ATOM]),
                new ArrayDenormalizer(),
                new ObjectNormalizer(propertyTypeExtractor: new ReflectionExtractor()),
            ],
            [new JsonEncoder()]
        );
    }

    public function encode(mixed $value): string
    {
        return $this->serializer->serialize($value, 'json');
    }

    public function decode(string $payload, string $type): mixed
    {
        return $this->serializer->deserialize($payload, $type, 'json');
    }
}
