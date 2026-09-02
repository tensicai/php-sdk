<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\MemoryBankGranularityCounts;

/**
 * @method static MemoryBankGranularityCounts fromArray(mixed[] $array)
 * @method static MemoryBankGranularityCounts fromRecordData(mixed[] $array)
 */
class MemoryBankGranularityCountsFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return MemoryBankGranularityCounts::class;
    }
}
