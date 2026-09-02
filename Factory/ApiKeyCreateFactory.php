<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ApiKeyCreate;

/**
 * @method static ApiKeyCreate fromArray(mixed[] $array)
 * @method static ApiKeyCreate fromRecordData(mixed[] $array)
 */
class ApiKeyCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ApiKeyCreate::class;
    }
}
