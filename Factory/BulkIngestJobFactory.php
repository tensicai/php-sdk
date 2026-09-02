<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\BulkIngestJob;

/**
 * @method static BulkIngestJob fromArray(mixed[] $array)
 * @method static BulkIngestJob fromRecordData(mixed[] $array)
 */
class BulkIngestJobFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return BulkIngestJob::class;
    }
}
