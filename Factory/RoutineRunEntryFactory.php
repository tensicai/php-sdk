<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\RoutineRunEntry;

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
