<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ApiKeyResponse;

/**
 * @method static ApiKeyResponse fromArray(mixed[] $array)
 * @method static ApiKeyResponse fromRecordData(mixed[] $array)
 */
class ApiKeyResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ApiKeyResponse::class;
    }
}
