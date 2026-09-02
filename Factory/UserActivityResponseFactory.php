<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\UserActivityResponse;

/**
 * @method static UserActivityResponse fromArray(mixed[] $array)
 * @method static UserActivityResponse fromRecordData(mixed[] $array)
 */
class UserActivityResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserActivityResponse::class;
    }
}
