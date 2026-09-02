<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\RoutineCreate;

/**
 * @method static RoutineCreate fromArray(mixed[] $array)
 * @method static RoutineCreate fromRecordData(mixed[] $array)
 */
class RoutineCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return RoutineCreate::class;
    }
}
