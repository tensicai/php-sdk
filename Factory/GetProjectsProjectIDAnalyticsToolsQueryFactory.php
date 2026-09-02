<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsToolsQuery;

/**
 * @method static GetProjectsProjectIDAnalyticsToolsQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDAnalyticsToolsQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDAnalyticsToolsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDAnalyticsToolsQuery::class;
    }
}
