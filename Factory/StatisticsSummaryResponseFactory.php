<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\StatisticsSummaryResponse;

/**
 * @method static StatisticsSummaryResponse fromArray(mixed[] $array)
 * @method static StatisticsSummaryResponse fromRecordData(mixed[] $array)
 */
class StatisticsSummaryResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return StatisticsSummaryResponse::class;
    }
}
