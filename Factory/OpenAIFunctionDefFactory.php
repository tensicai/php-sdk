<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIFunctionDef;

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
