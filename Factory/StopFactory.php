<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\Stop;

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
