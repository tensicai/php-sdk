<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationDailyPoint;

/**
 * @method static ConversationDailyPoint fromArray(mixed[] $array)
 * @method static ConversationDailyPoint fromRecordData(mixed[] $array)
 */
class ConversationDailyPointFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationDailyPoint::class;
    }
}
