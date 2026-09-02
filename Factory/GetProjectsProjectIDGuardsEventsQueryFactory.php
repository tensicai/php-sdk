<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDGuardsEventsQuery;

/**
 * @method static GetProjectsProjectIDGuardsEventsQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDGuardsEventsQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDGuardsEventsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDGuardsEventsQuery::class;
    }
}
