<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ChunkSizeDistribution;

/**
 * @method static ChunkSizeDistribution fromArray(mixed[] $array)
 * @method static ChunkSizeDistribution fromRecordData(mixed[] $array)
 */
class ChunkSizeDistributionFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ChunkSizeDistribution::class;
    }
}
