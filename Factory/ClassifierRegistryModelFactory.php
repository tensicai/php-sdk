<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ClassifierRegistryModel;

/**
 * @method static ClassifierRegistryModel fromArray(mixed[] $array)
 * @method static ClassifierRegistryModel fromRecordData(mixed[] $array)
 */
class ClassifierRegistryModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ClassifierRegistryModel::class;
    }
}
