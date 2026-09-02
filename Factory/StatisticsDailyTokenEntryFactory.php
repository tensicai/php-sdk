<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\StatisticsDailyTokenEntry;

/**
 * @method static StatisticsDailyTokenEntry fromArray(mixed[] $array)
 * @method static StatisticsDailyTokenEntry fromRecordData(mixed[] $array)
 */
class StatisticsDailyTokenEntryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return StatisticsDailyTokenEntry::class;
    }
}
