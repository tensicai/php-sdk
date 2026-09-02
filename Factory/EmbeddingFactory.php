<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\Embedding;

/**
 * @method static Embedding fromArray(mixed[] $array)
 * @method static Embedding fromRecordData(mixed[] $array)
 */
class EmbeddingFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Embedding::class;
    }
}
