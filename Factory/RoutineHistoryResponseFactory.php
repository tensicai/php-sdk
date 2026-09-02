<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\RoutineHistoryResponse;

/**
 * @method static RoutineHistoryResponse fromArray(mixed[] $array)
 * @method static RoutineHistoryResponse fromRecordData(mixed[] $array)
 */
class RoutineHistoryResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return RoutineHistoryResponse::class;
    }
}
