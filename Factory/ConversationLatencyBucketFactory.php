<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationLatencyBucket;

/**
 * @method static ConversationLatencyBucket fromArray(mixed[] $array)
 * @method static ConversationLatencyBucket fromRecordData(mixed[] $array)
 */
class ConversationLatencyBucketFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationLatencyBucket::class;
    }
}
