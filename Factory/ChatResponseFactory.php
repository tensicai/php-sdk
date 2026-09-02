<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ChatResponse;

/**
 * @method static ChatResponse fromArray(mixed[] $array)
 * @method static ChatResponse fromRecordData(mixed[] $array)
 */
class ChatResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ChatResponse::class;
    }
}
