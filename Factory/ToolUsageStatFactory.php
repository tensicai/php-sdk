<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ToolUsageStat;

/**
 * @method static ToolUsageStat fromArray(mixed[] $array)
 * @method static ToolUsageStat fromRecordData(mixed[] $array)
 */
class ToolUsageStatFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ToolUsageStat::class;
    }
}
