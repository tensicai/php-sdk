<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ChunkingAnalyticsResponse;

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
