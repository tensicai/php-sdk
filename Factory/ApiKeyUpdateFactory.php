<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ApiKeyUpdate;

/**
 * @method static ApiKeyUpdate fromArray(mixed[] $array)
 * @method static ApiKeyUpdate fromRecordData(mixed[] $array)
 */
class ApiKeyUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ApiKeyUpdate::class;
    }
}
