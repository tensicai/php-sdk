<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIChatCompletionResponse;

/**
 * @method static OpenAIChatCompletionResponse fromArray(mixed[] $array)
 * @method static OpenAIChatCompletionResponse fromRecordData(mixed[] $array)
 */
class OpenAIChatCompletionResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIChatCompletionResponse::class;
    }
}
