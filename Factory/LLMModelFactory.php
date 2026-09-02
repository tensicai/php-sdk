<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\LLMModel;

/**
 * @method static LLMModel fromArray(mixed[] $array)
 * @method static LLMModel fromRecordData(mixed[] $array)
 */
class LLMModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return LLMModel::class;
    }
}
