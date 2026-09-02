<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIToolCall;

/**
 * @method static OpenAIToolCall fromArray(mixed[] $array)
 * @method static OpenAIToolCall fromRecordData(mixed[] $array)
 */
class OpenAIToolCallFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIToolCall::class;
    }
}
