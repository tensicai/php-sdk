<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\OpenAIFunctionDef;

/**
 * @method static OpenAIFunctionDef fromArray(mixed[] $array)
 * @method static OpenAIFunctionDef fromRecordData(mixed[] $array)
 */
class OpenAIFunctionDefFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIFunctionDef::class;
    }
}
