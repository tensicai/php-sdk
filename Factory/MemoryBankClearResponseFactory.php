<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\MemoryBankClearResponse;

/**
 * @method static MemoryBankClearResponse fromArray(mixed[] $array)
 * @method static MemoryBankClearResponse fromRecordData(mixed[] $array)
 */
class MemoryBankClearResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return MemoryBankClearResponse::class;
    }
}
