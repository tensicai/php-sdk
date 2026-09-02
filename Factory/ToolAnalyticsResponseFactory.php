<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ToolAnalyticsResponse;

/**
 * @method static ToolAnalyticsResponse fromArray(mixed[] $array)
 * @method static ToolAnalyticsResponse fromRecordData(mixed[] $array)
 */
class ToolAnalyticsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ToolAnalyticsResponse::class;
    }
}
