<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\Options3;

/**
 * @method static Options3 fromArray(mixed[] $array)
 * @method static Options3 fromRecordData(mixed[] $array)
 */
class Options3Factory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Options3::class;
    }
}
