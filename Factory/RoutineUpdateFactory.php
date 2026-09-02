<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\RoutineUpdate;

/**
 * @method static RoutineUpdate fromArray(mixed[] $array)
 * @method static RoutineUpdate fromRecordData(mixed[] $array)
 */
class RoutineUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return RoutineUpdate::class;
    }
}
