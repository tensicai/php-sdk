<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\MemorySearchResponse;

/**
 * @method static MemorySearchResponse fromArray(mixed[] $array)
 * @method static MemorySearchResponse fromRecordData(mixed[] $array)
 */
class MemorySearchResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return MemorySearchResponse::class;
    }
}
