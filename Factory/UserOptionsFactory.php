<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\UserOptions;

/**
 * @method static UserOptions fromArray(mixed[] $array)
 * @method static UserOptions fromRecordData(mixed[] $array)
 */
class UserOptionsFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserOptions::class;
    }
}
