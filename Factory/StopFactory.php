<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\Stop;

/**
 * @method static Stop fromArray(mixed[] $array)
 * @method static Stop fromRecordData(mixed[] $array)
 */
class StopFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Stop::class;
    }
}
