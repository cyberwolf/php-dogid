<?php

namespace BSBV\DogID\Serializer;

use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SerializerFactory
{
    public function createSerializer(): Serializer
    {
        $objectNormalizer = new ObjectNormalizer(null, null, null, new ReflectionExtractor());

        $encoders = [
            new JsonEncoder(),
        ];

        $serializer = new Serializer(
          [
            $objectNormalizer,
            new ArrayDenormalizer(),
          ],
          $encoders
        );

        return $serializer;
    }
}
