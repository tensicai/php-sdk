<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TeamLLM;

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
