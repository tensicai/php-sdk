<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsToolsQuery;

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
