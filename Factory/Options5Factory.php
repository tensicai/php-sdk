<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\Options5;

/**
 * @method static Options5 fromArray(mixed[] $array)
 * @method static Options5 fromRecordData(mixed[] $array)
 */
class Options5Factory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Options5::class;
    }
}
