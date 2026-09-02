<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\OpenAIImageGenerateRequest;

/**
 * @method static OpenAIImageGenerateRequest fromArray(mixed[] $array)
 * @method static OpenAIImageGenerateRequest fromRecordData(mixed[] $array)
 */
class OpenAIImageGenerateRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIImageGenerateRequest::class;
    }
}
