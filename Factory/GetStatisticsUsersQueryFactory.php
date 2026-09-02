<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetStatisticsUsersQuery;

/**
 * @method static GetStatisticsUsersQuery fromArray(mixed[] $array)
 * @method static GetStatisticsUsersQuery fromRecordData(mixed[] $array)
 */
class GetStatisticsUsersQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetStatisticsUsersQuery::class;
    }
}
