<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDCommentsQuery;

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
