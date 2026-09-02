<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\OpenAIChatCompletionUsage;

/**
 * @method static OpenAIChatCompletionUsage fromArray(mixed[] $array)
 * @method static OpenAIChatCompletionUsage fromRecordData(mixed[] $array)
 */
class OpenAIChatCompletionUsageFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIChatCompletionUsage::class;
    }
}
