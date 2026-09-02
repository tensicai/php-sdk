<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDIngestBulkQuery;

/**
 * @method static GetProjectsProjectIDIngestBulkQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDIngestBulkQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDIngestBulkQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDIngestBulkQuery::class;
    }
}
