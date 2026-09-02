<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\Options4;

/**
 * @method static Options4 fromArray(mixed[] $array)
 * @method static Options4 fromRecordData(mixed[] $array)
 */
class Options4Factory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Options4::class;
    }
}
