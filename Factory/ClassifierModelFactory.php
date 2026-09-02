<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ClassifierModel;

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
