<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\Options7;

/**
 * @method static Options7 fromArray(mixed[] $array)
 * @method static Options7 fromRecordData(mixed[] $array)
 */
class Options7Factory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Options7::class;
    }
}
