<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationAnalyticsResponse;

/**
 * @method static ConversationAnalyticsResponse fromArray(mixed[] $array)
 * @method static ConversationAnalyticsResponse fromRecordData(mixed[] $array)
 */
class ConversationAnalyticsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationAnalyticsResponse::class;
    }
}
