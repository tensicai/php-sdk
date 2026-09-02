<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ConversationHourlyPoint;

/**
 * @method static ConversationHourlyPoint fromArray(mixed[] $array)
 * @method static ConversationHourlyPoint fromRecordData(mixed[] $array)
 */
class ConversationHourlyPointFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationHourlyPoint::class;
    }
}
