<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetTeamsTeamIdTransactionsQuery;

/**
 * @method static GetTeamsTeamIdTransactionsQuery fromArray(mixed[] $array)
 * @method static GetTeamsTeamIdTransactionsQuery fromRecordData(mixed[] $array)
 */
class GetTeamsTeamIdTransactionsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetTeamsTeamIdTransactionsQuery::class;
    }
}
