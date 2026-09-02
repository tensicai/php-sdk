<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ClassifierRegistryCreate;

/**
 * @method static ClassifierRegistryCreate fromArray(mixed[] $array)
 * @method static ClassifierRegistryCreate fromRecordData(mixed[] $array)
 */
class ClassifierRegistryCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ClassifierRegistryCreate::class;
    }
}
