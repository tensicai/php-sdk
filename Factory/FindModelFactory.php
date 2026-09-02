<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\FindModel;

/**
 * @method static FindModel fromArray(mixed[] $array)
 * @method static FindModel fromRecordData(mixed[] $array)
 */
class FindModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return FindModel::class;
    }
}
