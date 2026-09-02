<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetProjectsProjectIDRoutinesRoutineIDHistoryQuery;

/**
 * @method static GetProjectsProjectIDRoutinesRoutineIDHistoryQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDRoutinesRoutineIDHistoryQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDRoutinesRoutineIDHistoryQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDRoutinesRoutineIDHistoryQuery::class;
    }
}
