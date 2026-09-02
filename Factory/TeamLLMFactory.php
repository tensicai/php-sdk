<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TeamLLM;

/**
 * @method static TeamLLM fromArray(mixed[] $array)
 * @method static TeamLLM fromRecordData(mixed[] $array)
 */
class TeamLLMFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamLLM::class;
    }
}
