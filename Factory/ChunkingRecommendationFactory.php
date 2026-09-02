<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ChunkingRecommendation;

/**
 * @method static ChunkingRecommendation fromArray(mixed[] $array)
 * @method static ChunkingRecommendation fromRecordData(mixed[] $array)
 */
class ChunkingRecommendationFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ChunkingRecommendation::class;
    }
}
