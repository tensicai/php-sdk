<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDEvalsRunsQuery;

/**
 * @method static GetProjectsProjectIDEvalsRunsQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDEvalsRunsQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDEvalsRunsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDEvalsRunsQuery::class;
    }
}
