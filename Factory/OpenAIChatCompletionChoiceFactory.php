<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\OpenAIChatCompletionChoice;

/**
 * @method static OpenAIChatCompletionChoice fromArray(mixed[] $array)
 * @method static OpenAIChatCompletionChoice fromRecordData(mixed[] $array)
 */
class OpenAIChatCompletionChoiceFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIChatCompletionChoice::class;
    }
}
