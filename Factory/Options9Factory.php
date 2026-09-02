<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\Options9;

/**
 * @method static Options9 fromArray(mixed[] $array)
 * @method static Options9 fromRecordData(mixed[] $array)
 */
class Options9Factory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Options9::class;
    }
}
