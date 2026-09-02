<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectHealthTotals;

/**
 * @method static ProjectHealthTotals fromArray(mixed[] $array)
 * @method static ProjectHealthTotals fromRecordData(mixed[] $array)
 */
class ProjectHealthTotalsFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectHealthTotals::class;
    }
}
