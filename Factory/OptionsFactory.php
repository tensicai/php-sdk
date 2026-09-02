<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\Options;

/**
 * @method static Options fromArray(mixed[] $array)
 * @method static Options fromRecordData(mixed[] $array)
 */
class OptionsFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Options::class;
    }
}
