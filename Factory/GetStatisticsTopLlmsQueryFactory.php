<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetStatisticsTopLlmsQuery;

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
