<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\Input1;

/**
 * @method static Input1 fromArray(mixed[] $array)
 * @method static Input1 fromRecordData(mixed[] $array)
 */
class Input1Factory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Input1::class;
    }
}
