<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDTokensDailyQuery;

/**
 * @method static GetProjectsProjectIDTokensDailyQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDTokensDailyQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDTokensDailyQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDTokensDailyQuery::class;
    }
}
