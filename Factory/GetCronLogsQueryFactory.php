<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetCronLogsQuery;

/**
 * @method static GetCronLogsQuery fromArray(mixed[] $array)
 * @method static GetCronLogsQuery fromRecordData(mixed[] $array)
 */
class GetCronLogsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetCronLogsQuery::class;
    }
}
