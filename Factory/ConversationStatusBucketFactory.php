<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationStatusBucket;

/**
 * @method static ConversationStatusBucket fromArray(mixed[] $array)
 * @method static ConversationStatusBucket fromRecordData(mixed[] $array)
 */
class ConversationStatusBucketFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationStatusBucket::class;
    }
}
