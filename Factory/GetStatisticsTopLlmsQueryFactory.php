<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetStatisticsTopLlmsQuery;

/**
 * @method static GetStatisticsTopLlmsQuery fromArray(mixed[] $array)
 * @method static GetStatisticsTopLlmsQuery fromRecordData(mixed[] $array)
 */
class GetStatisticsTopLlmsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetStatisticsTopLlmsQuery::class;
    }
}
