<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\StatisticsTopLLMsResponse;

/**
 * @method static StatisticsTopLLMsResponse fromArray(mixed[] $array)
 * @method static StatisticsTopLLMsResponse fromRecordData(mixed[] $array)
 */
class StatisticsTopLLMsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return StatisticsTopLLMsResponse::class;
    }
}
