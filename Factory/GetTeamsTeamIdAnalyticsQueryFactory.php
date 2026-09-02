<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetTeamsTeamIdAnalyticsQuery;

/**
 * @method static GetTeamsTeamIdAnalyticsQuery fromArray(mixed[] $array)
 * @method static GetTeamsTeamIdAnalyticsQuery fromRecordData(mixed[] $array)
 */
class GetTeamsTeamIdAnalyticsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetTeamsTeamIdAnalyticsQuery::class;
    }
}
