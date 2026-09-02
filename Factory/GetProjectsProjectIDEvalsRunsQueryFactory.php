<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetProjectsProjectIDEvalsRunsQuery;

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
