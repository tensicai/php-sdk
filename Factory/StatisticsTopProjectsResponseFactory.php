<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\StatisticsTopProjectsResponse;

/**
 * @method static StatisticsTopProjectsResponse fromArray(mixed[] $array)
 * @method static StatisticsTopProjectsResponse fromRecordData(mixed[] $array)
 */
class StatisticsTopProjectsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return StatisticsTopProjectsResponse::class;
    }
}
