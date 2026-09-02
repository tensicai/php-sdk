<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectCustomToolEntry;

/**
 * @method static ProjectCustomToolEntry fromArray(mixed[] $array)
 * @method static ProjectCustomToolEntry fromRecordData(mixed[] $array)
 */
class ProjectCustomToolEntryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectCustomToolEntry::class;
    }
}
