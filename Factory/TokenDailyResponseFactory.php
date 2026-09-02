<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TokenDailyResponse;

/**
 * @method static TokenDailyResponse fromArray(mixed[] $array)
 * @method static TokenDailyResponse fromRecordData(mixed[] $array)
 */
class TokenDailyResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TokenDailyResponse::class;
    }
}
