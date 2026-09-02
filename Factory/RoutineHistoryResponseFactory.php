<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\RoutineHistoryResponse;

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
