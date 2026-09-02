<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GuardDailyResponse;

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
