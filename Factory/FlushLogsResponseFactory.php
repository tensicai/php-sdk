<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\FlushLogsResponse;

/**
 * @method static FlushLogsResponse fromArray(mixed[] $array)
 * @method static FlushLogsResponse fromRecordData(mixed[] $array)
 */
class FlushLogsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return FlushLogsResponse::class;
    }
}
