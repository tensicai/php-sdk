<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsChunkingQuery;

/**
 * @method static GetProjectsProjectIDAnalyticsChunkingQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDAnalyticsChunkingQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDAnalyticsChunkingQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDAnalyticsChunkingQuery::class;
    }
}
