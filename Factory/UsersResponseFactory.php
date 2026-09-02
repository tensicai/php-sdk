<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\UsersResponse;

/**
 * @method static UsersResponse fromArray(mixed[] $array)
 * @method static UsersResponse fromRecordData(mixed[] $array)
 */
class UsersResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UsersResponse::class;
    }
}
