<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIChatCompletionUsage;

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
