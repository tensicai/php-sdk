<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectLogEntry;

/**
 * @method static ProjectLogEntry fromArray(mixed[] $array)
 * @method static ProjectLogEntry fromRecordData(mixed[] $array)
 */
class ProjectLogEntryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectLogEntry::class;
    }
}
