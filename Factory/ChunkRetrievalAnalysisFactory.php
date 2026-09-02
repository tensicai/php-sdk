<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ChunkRetrievalAnalysis;

/**
 * @method static ChunkRetrievalAnalysis fromArray(mixed[] $array)
 * @method static ChunkRetrievalAnalysis fromRecordData(mixed[] $array)
 */
class ChunkRetrievalAnalysisFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ChunkRetrievalAnalysis::class;
    }
}
