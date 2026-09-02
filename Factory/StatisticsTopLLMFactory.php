<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\StatisticsTopLLM;

/**
 * @method static StatisticsTopLLM fromArray(mixed[] $array)
 * @method static StatisticsTopLLM fromRecordData(mixed[] $array)
 */
class StatisticsTopLLMFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return StatisticsTopLLM::class;
    }
}
