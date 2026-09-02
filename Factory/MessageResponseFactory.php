<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\MessageResponse;

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
