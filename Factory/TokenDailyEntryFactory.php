<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TokenDailyEntry;

/**
 * @method static TokenDailyEntry fromArray(mixed[] $array)
 * @method static TokenDailyEntry fromRecordData(mixed[] $array)
 */
class TokenDailyEntryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TokenDailyEntry::class;
    }
}
