<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\Options1;

/**
 * @method static Options1 fromArray(mixed[] $array)
 * @method static Options1 fromRecordData(mixed[] $array)
 */
class Options1Factory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Options1::class;
    }
}
