<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\User;

/**
 * @method static User fromArray(mixed[] $array)
 * @method static User fromRecordData(mixed[] $array)
 */
class UserFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return User::class;
    }
}
