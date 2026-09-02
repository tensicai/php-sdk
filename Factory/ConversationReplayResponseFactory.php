<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationReplayResponse;

/**
 * @method static ConversationReplayResponse fromArray(mixed[] $array)
 * @method static ConversationReplayResponse fromRecordData(mixed[] $array)
 */
class ConversationReplayResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationReplayResponse::class;
    }
}
