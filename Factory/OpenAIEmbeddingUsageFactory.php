<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIEmbeddingUsage;

/**
 * @method static OpenAIEmbeddingUsage fromArray(mixed[] $array)
 * @method static OpenAIEmbeddingUsage fromRecordData(mixed[] $array)
 */
class OpenAIEmbeddingUsageFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIEmbeddingUsage::class;
    }
}
