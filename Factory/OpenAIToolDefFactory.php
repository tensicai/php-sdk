<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIToolDef;

/**
 * @method static OpenAIToolDef fromArray(mixed[] $array)
 * @method static OpenAIToolDef fromRecordData(mixed[] $array)
 */
class OpenAIToolDefFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIToolDef::class;
    }
}
