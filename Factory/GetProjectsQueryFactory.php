<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsQuery;

/**
 * @method static GetProjectsQuery fromArray(mixed[] $array)
 * @method static GetProjectsQuery fromRecordData(mixed[] $array)
 */
class GetProjectsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsQuery::class;
    }
}
