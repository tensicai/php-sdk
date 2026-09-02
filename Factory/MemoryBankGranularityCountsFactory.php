<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\MemoryBankGranularityCounts;

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
