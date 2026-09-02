<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\UserUpdate;

/**
 * @method static UserUpdate fromArray(mixed[] $array)
 * @method static UserUpdate fromRecordData(mixed[] $array)
 */
class UserUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserUpdate::class;
    }
}
