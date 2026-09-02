<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\MemorySearchRequest;

/**
 * @method static MemorySearchRequest fromArray(mixed[] $array)
 * @method static MemorySearchRequest fromRecordData(mixed[] $array)
 */
class MemorySearchRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return MemorySearchRequest::class;
    }
}
