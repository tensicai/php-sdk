<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetProjectsProjectIDGuardsDailyQuery;

/**
 * @method static GetProjectsProjectIDGuardsDailyQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDGuardsDailyQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDGuardsDailyQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDGuardsDailyQuery::class;
    }
}
