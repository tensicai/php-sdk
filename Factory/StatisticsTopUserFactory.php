<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\StatisticsTopUser;

/**
 * @method static StatisticsTopUser fromArray(mixed[] $array)
 * @method static StatisticsTopUser fromRecordData(mixed[] $array)
 */
class StatisticsTopUserFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return StatisticsTopUser::class;
    }
}
