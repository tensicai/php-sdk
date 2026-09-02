<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationContextResponse;

/**
 * @method static ConversationContextResponse fromArray(mixed[] $array)
 * @method static ConversationContextResponse fromRecordData(mixed[] $array)
 */
class ConversationContextResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationContextResponse::class;
    }
}
