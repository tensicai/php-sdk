<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDGuardsDailyQuery;

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
