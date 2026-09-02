<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsSourcesQuery;

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
