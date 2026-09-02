<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\PageEmbeddingModel;

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
