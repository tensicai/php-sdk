<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GuardDailyEntry;

/**
 * @method static GuardDailyEntry fromArray(mixed[] $array)
 * @method static GuardDailyEntry fromRecordData(mixed[] $array)
 */
class GuardDailyEntryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GuardDailyEntry::class;
    }
}
