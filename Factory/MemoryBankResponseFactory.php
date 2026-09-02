<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\MemoryBankResponse;

/**
 * @method static MemoryBankResponse fromArray(mixed[] $array)
 * @method static MemoryBankResponse fromRecordData(mixed[] $array)
 */
class MemoryBankResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return MemoryBankResponse::class;
    }
}
