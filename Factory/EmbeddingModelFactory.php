<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\EmbeddingModel;

/**
 * @method static EmbeddingModel fromArray(mixed[] $array)
 * @method static EmbeddingModel fromRecordData(mixed[] $array)
 */
class EmbeddingModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EmbeddingModel::class;
    }
}
