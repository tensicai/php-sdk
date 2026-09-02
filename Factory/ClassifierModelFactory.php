<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ClassifierModel;

/**
 * @method static ClassifierModel fromArray(mixed[] $array)
 * @method static ClassifierModel fromRecordData(mixed[] $array)
 */
class ClassifierModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ClassifierModel::class;
    }
}
