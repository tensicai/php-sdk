<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIEmbeddingResponse;

/**
 * @method static OpenAIEmbeddingResponse fromArray(mixed[] $array)
 * @method static OpenAIEmbeddingResponse fromRecordData(mixed[] $array)
 */
class OpenAIEmbeddingResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIEmbeddingResponse::class;
    }
}
