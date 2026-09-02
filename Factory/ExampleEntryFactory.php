<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ExampleEntry;

/**
 * @method static ExampleEntry fromArray(mixed[] $array)
 * @method static ExampleEntry fromRecordData(mixed[] $array)
 */
class ExampleEntryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ExampleEntry::class;
    }
}
