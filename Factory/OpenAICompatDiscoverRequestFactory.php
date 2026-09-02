<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\OpenAICompatDiscoverRequest;

/**
 * @method static OpenAICompatDiscoverRequest fromArray(mixed[] $array)
 * @method static OpenAICompatDiscoverRequest fromRecordData(mixed[] $array)
 */
class OpenAICompatDiscoverRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAICompatDiscoverRequest::class;
    }
}
