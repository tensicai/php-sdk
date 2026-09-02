<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetStatisticsDailyTokensQuery;

/**
 * @method static GetStatisticsDailyTokensQuery fromArray(mixed[] $array)
 * @method static GetStatisticsDailyTokensQuery fromRecordData(mixed[] $array)
 */
class GetStatisticsDailyTokensQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetStatisticsDailyTokensQuery::class;
    }
}
