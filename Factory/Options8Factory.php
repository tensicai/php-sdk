<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\Options8;

/**
 * @method static Options8 fromArray(mixed[] $array)
 * @method static Options8 fromRecordData(mixed[] $array)
 */
class Options8Factory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Options8::class;
    }
}
