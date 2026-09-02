<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIChatMessage;

/**
 * @method static OpenAIChatMessage fromArray(mixed[] $array)
 * @method static OpenAIChatMessage fromRecordData(mixed[] $array)
 */
class OpenAIChatMessageFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIChatMessage::class;
    }
}
