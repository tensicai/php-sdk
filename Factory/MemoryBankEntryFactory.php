<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\MemoryBankEntry;

/**
 * @method static MemoryBankEntry fromArray(mixed[] $array)
 * @method static MemoryBankEntry fromRecordData(mixed[] $array)
 */
class MemoryBankEntryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return MemoryBankEntry::class;
    }
}
