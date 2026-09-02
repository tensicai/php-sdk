<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\LimitedUser;

/**
 * @method static LimitedUser fromArray(mixed[] $array)
 * @method static LimitedUser fromRecordData(mixed[] $array)
 */
class LimitedUserFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return LimitedUser::class;
    }
}
