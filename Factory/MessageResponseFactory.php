<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\MessageResponse;

/**
 * @method static MessageResponse fromArray(mixed[] $array)
 * @method static MessageResponse fromRecordData(mixed[] $array)
 */
class MessageResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return MessageResponse::class;
    }
}
