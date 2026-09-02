<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\OpenAIEmbeddingRequest;

/**
 * @method static OpenAIEmbeddingRequest fromArray(mixed[] $array)
 * @method static OpenAIEmbeddingRequest fromRecordData(mixed[] $array)
 */
class OpenAIEmbeddingRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIEmbeddingRequest::class;
    }
}
