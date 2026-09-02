<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\Options2;

/**
 * @method static Options2 fromArray(mixed[] $array)
 * @method static Options2 fromRecordData(mixed[] $array)
 */
class Options2Factory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Options2::class;
    }
}
