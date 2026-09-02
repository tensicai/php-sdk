<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\BulkIngestJobsResponse;

/**
 * @method static BulkIngestJobsResponse fromArray(mixed[] $array)
 * @method static BulkIngestJobsResponse fromRecordData(mixed[] $array)
 */
class BulkIngestJobsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return BulkIngestJobsResponse::class;
    }
}
