<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\UserActivityDaily;

/**
 * @method static UserActivityDaily fromArray(mixed[] $array)
 * @method static UserActivityDaily fromRecordData(mixed[] $array)
 */
class UserActivityDailyFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserActivityDaily::class;
    }
}
