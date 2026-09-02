<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ClassifierRegistryUpdate;

/**
 * @method static ClassifierRegistryUpdate fromArray(mixed[] $array)
 * @method static ClassifierRegistryUpdate fromRecordData(mixed[] $array)
 */
class ClassifierRegistryUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ClassifierRegistryUpdate::class;
    }
}
