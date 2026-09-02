<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ChunkScoreByBucket;

/**
 * @method static ChunkScoreByBucket fromArray(mixed[] $array)
 * @method static ChunkScoreByBucket fromRecordData(mixed[] $array)
 */
class ChunkScoreByBucketFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ChunkScoreByBucket::class;
    }
}
