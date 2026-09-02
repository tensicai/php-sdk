<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\RoutineRunEntry;

/**
 * @method static RoutineRunEntry fromArray(mixed[] $array)
 * @method static RoutineRunEntry fromRecordData(mixed[] $array)
 */
class RoutineRunEntryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return RoutineRunEntry::class;
    }
}
