<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetStatisticsUsersUserIDQuery;

/**
 * @method static GetStatisticsUsersUserIDQuery fromArray(mixed[] $array)
 * @method static GetStatisticsUsersUserIDQuery fromRecordData(mixed[] $array)
 */
class GetStatisticsUsersUserIDQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetStatisticsUsersUserIDQuery::class;
    }
}
