<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\LLMTestRequest;

/**
 * @method static LLMTestRequest fromArray(mixed[] $array)
 * @method static LLMTestRequest fromRecordData(mixed[] $array)
 */
class LLMTestRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return LLMTestRequest::class;
    }
}
