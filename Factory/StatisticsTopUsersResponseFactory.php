<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\StatisticsTopUsersResponse;

/**
 * @method static StatisticsTopUsersResponse fromArray(mixed[] $array)
 * @method static StatisticsTopUsersResponse fromRecordData(mixed[] $array)
 */
class StatisticsTopUsersResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return StatisticsTopUsersResponse::class;
    }
}
