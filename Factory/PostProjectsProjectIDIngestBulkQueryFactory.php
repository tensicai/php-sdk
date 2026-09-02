<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\PostProjectsProjectIDIngestBulkQuery;

/**
 * @method static PostProjectsProjectIDIngestBulkQuery fromArray(mixed[] $array)
 * @method static PostProjectsProjectIDIngestBulkQuery fromRecordData(mixed[] $array)
 */
class PostProjectsProjectIDIngestBulkQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PostProjectsProjectIDIngestBulkQuery::class;
    }
}
