<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetStatisticsTopProjectsQuery;

/**
 * @method static GetStatisticsTopProjectsQuery fromArray(mixed[] $array)
 * @method static GetStatisticsTopProjectsQuery fromRecordData(mixed[] $array)
 */
class GetStatisticsTopProjectsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetStatisticsTopProjectsQuery::class;
    }
}
