<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetAuditQuery;

/**
 * @method static GetAuditQuery fromArray(mixed[] $array)
 * @method static GetAuditQuery fromRecordData(mixed[] $array)
 */
class GetAuditQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetAuditQuery::class;
    }
}
