<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetTeamsQuery;

/**
 * @method static GetTeamsQuery fromArray(mixed[] $array)
 * @method static GetTeamsQuery fromRecordData(mixed[] $array)
 */
class GetTeamsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetTeamsQuery::class;
    }
}
