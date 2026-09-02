<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\RoutineEntry;

/**
 * @method static RoutineEntry fromArray(mixed[] $array)
 * @method static RoutineEntry fromRecordData(mixed[] $array)
 */
class RoutineEntryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return RoutineEntry::class;
    }
}
