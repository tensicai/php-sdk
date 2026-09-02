<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\LimitedUser;

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
