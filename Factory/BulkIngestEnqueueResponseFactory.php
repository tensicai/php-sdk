<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\BulkIngestEnqueueResponse;

/**
 * @method static BulkIngestEnqueueResponse fromArray(mixed[] $array)
 * @method static BulkIngestEnqueueResponse fromRecordData(mixed[] $array)
 */
class BulkIngestEnqueueResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return BulkIngestEnqueueResponse::class;
    }
}
