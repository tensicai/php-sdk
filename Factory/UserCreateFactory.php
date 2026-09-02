<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\UserCreate;

/**
 * @method static UserCreate fromArray(mixed[] $array)
 * @method static UserCreate fromRecordData(mixed[] $array)
 */
class UserCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserCreate::class;
    }
}
