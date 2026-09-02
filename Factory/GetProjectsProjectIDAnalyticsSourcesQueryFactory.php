<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsSourcesQuery;

/**
 * @method static GetProjectsProjectIDAnalyticsSourcesQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDAnalyticsSourcesQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDAnalyticsSourcesQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDAnalyticsSourcesQuery::class;
    }
}
