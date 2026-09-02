<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ChatStopRequest;

/**
 * @method static ChatStopRequest fromArray(mixed[] $array)
 * @method static ChatStopRequest fromRecordData(mixed[] $array)
 */
class ChatStopRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ChatStopRequest::class;
    }
}
