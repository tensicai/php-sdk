<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\PageEmbeddingModel;

/**
 * @method static PageEmbeddingModel fromArray(mixed[] $array)
 * @method static PageEmbeddingModel fromRecordData(mixed[] $array)
 */
class PageEmbeddingModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PageEmbeddingModel::class;
    }
}
