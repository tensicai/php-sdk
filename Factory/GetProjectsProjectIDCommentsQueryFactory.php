<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetProjectsProjectIDCommentsQuery;

/**
 * @method static GetProjectsProjectIDCommentsQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDCommentsQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDCommentsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDCommentsQuery::class;
    }
}
