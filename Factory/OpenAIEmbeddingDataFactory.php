<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIEmbeddingData;

/**
 * @method static OpenAIEmbeddingData fromArray(mixed[] $array)
 * @method static OpenAIEmbeddingData fromRecordData(mixed[] $array)
 */
class OpenAIEmbeddingDataFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIEmbeddingData::class;
    }
}
