<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationListResponse;

/**
 * @method static ConversationListResponse fromArray(mixed[] $array)
 * @method static ConversationListResponse fromRecordData(mixed[] $array)
 */
class ConversationListResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationListResponse::class;
    }
}
