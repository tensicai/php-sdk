<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\UsersInner;

/**
 * @method static UsersInner fromArray(mixed[] $array)
 * @method static UsersInner fromRecordData(mixed[] $array)
 */
class UsersInnerFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UsersInner::class;
    }
}
