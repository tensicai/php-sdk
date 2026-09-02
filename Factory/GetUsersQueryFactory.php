<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetUsersQuery;

/**
 * @method static GetUsersQuery fromArray(mixed[] $array)
 * @method static GetUsersQuery fromRecordData(mixed[] $array)
 */
class GetUsersQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetUsersQuery::class;
    }
}
