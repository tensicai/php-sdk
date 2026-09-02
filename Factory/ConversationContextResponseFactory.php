<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ConversationContextResponse;

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
