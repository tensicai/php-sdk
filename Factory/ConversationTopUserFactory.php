<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationTopUser;

/**
 * @method static ConversationTopUser fromArray(mixed[] $array)
 * @method static ConversationTopUser fromRecordData(mixed[] $array)
 */
class ConversationTopUserFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationTopUser::class;
    }
}
