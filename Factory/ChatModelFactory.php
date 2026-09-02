<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ChatModel;

/**
 * @method static ChatModel fromArray(mixed[] $array)
 * @method static ChatModel fromRecordData(mixed[] $array)
 */
class ChatModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ChatModel::class;
    }
}
