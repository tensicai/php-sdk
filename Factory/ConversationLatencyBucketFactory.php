<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ConversationLatencyBucket;

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
