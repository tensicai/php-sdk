<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\OpenAICompletionRequest;

/**
 * @method static OpenAICompletionRequest fromArray(mixed[] $array)
 * @method static OpenAICompletionRequest fromRecordData(mixed[] $array)
 */
class OpenAICompletionRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAICompletionRequest::class;
    }
}
