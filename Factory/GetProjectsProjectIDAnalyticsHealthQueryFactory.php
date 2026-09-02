<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsHealthQuery;

/**
 * @method static GetProjectsProjectIDAnalyticsHealthQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDAnalyticsHealthQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDAnalyticsHealthQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDAnalyticsHealthQuery::class;
    }
}
