<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\EmbeddingUpdate;

/**
 * @method static EmbeddingUpdate fromArray(mixed[] $array)
 * @method static EmbeddingUpdate fromRecordData(mixed[] $array)
 */
class EmbeddingUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EmbeddingUpdate::class;
    }
}
