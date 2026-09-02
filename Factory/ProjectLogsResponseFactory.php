<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectLogsResponse;

/**
 * @method static ProjectLogsResponse fromArray(mixed[] $array)
 * @method static ProjectLogsResponse fromRecordData(mixed[] $array)
 */
class ProjectLogsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectLogsResponse::class;
    }
}
