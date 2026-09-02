<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAICompletionRequest;

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
