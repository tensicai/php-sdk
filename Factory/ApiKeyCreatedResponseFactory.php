<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ApiKeyCreatedResponse;

/**
 * @method static ApiKeyCreatedResponse fromArray(mixed[] $array)
 * @method static ApiKeyCreatedResponse fromRecordData(mixed[] $array)
 */
class ApiKeyCreatedResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ApiKeyCreatedResponse::class;
    }
}
