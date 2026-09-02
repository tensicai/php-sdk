<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIImageGenerateRequest;

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
