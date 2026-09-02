<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetProjectsProjectIDLogsQuery;

/**
 * @method static GetProjectsProjectIDLogsQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDLogsQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDLogsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDLogsQuery::class;
    }
}
