<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\Options6;

/**
 * @method static Options6 fromArray(mixed[] $array)
 * @method static Options6 fromRecordData(mixed[] $array)
 */
class Options6Factory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Options6::class;
    }
}
