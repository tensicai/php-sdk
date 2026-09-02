<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OpenAIModerationRequest;

/**
 * @method static OpenAIModerationRequest fromArray(mixed[] $array)
 * @method static OpenAIModerationRequest fromRecordData(mixed[] $array)
 */
class OpenAIModerationRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OpenAIModerationRequest::class;
    }
}
