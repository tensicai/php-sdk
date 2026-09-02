<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ExampleProjectEntry;

/**
 * @method static ExampleProjectEntry fromArray(mixed[] $array)
 * @method static ExampleProjectEntry fromRecordData(mixed[] $array)
 */
class ExampleProjectEntryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ExampleProjectEntry::class;
    }
}
