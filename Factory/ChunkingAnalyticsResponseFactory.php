<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ChunkingAnalyticsResponse;

/**
 * @method static ChunkingAnalyticsResponse fromArray(mixed[] $array)
 * @method static ChunkingAnalyticsResponse fromRecordData(mixed[] $array)
 */
class ChunkingAnalyticsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ChunkingAnalyticsResponse::class;
    }
}
