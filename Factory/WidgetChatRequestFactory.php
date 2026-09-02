<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\WidgetChatRequest;

/**
 * @method static WidgetChatRequest fromArray(mixed[] $array)
 * @method static WidgetChatRequest fromRecordData(mixed[] $array)
 */
class WidgetChatRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return WidgetChatRequest::class;
    }
}
