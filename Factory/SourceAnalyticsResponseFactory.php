<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\SourceAnalyticsResponse;

/**
 * @method static SourceAnalyticsResponse fromArray(mixed[] $array)
 * @method static SourceAnalyticsResponse fromRecordData(mixed[] $array)
 */
class SourceAnalyticsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SourceAnalyticsResponse::class;
    }
}
