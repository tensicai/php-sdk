<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationLLMBucket;

/**
 * @method static ConversationLLMBucket fromArray(mixed[] $array)
 * @method static ConversationLLMBucket fromRecordData(mixed[] $array)
 */
class ConversationLLMBucketFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationLLMBucket::class;
    }
}
