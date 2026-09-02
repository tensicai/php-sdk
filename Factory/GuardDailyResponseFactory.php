<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GuardDailyResponse;

/**
 * @method static GuardDailyResponse fromArray(mixed[] $array)
 * @method static GuardDailyResponse fromRecordData(mixed[] $array)
 */
class GuardDailyResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GuardDailyResponse::class;
    }
}
