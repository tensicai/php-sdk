<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\UserLogin;

/**
 * @method static UserLogin fromArray(mixed[] $array)
 * @method static UserLogin fromRecordData(mixed[] $array)
 */
class UserLoginFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserLogin::class;
    }
}
