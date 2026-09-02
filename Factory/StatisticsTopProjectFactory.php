<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\StatisticsTopProject;

/**
 * @method static StatisticsTopProject fromArray(mixed[] $array)
 * @method static StatisticsTopProject fromRecordData(mixed[] $array)
 */
class StatisticsTopProjectFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return StatisticsTopProject::class;
    }
}
