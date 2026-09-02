<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\UserActivityHourly;

/**
 * @method static UserActivityHourly fromArray(mixed[] $array)
 * @method static UserActivityHourly fromRecordData(mixed[] $array)
 */
class UserActivityHourlyFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserActivityHourly::class;
    }
}
