<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\UserUpdate;

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
