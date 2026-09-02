<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\StatisticsDailyTokensResponse;

/**
 * @method static StatisticsDailyTokensResponse fromArray(mixed[] $array)
 * @method static StatisticsDailyTokensResponse fromRecordData(mixed[] $array)
 */
class StatisticsDailyTokensResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return StatisticsDailyTokensResponse::class;
    }
}
