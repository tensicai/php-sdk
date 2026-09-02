<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIChatCompletionRequest;

/**
 * @method static OpenAIChatCompletionRequest fromArray(mixed[] $array)
 * @method static OpenAIChatCompletionRequest fromRecordData(mixed[] $array)
 */
class OpenAIChatCompletionRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIChatCompletionRequest::class;
    }
}
