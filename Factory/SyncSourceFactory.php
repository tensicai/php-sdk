<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\SyncSource;

/**
 * @method static SyncSource fromArray(mixed[] $array)
 * @method static SyncSource fromRecordData(mixed[] $array)
 */
class SyncSourceFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SyncSource::class;
    }
}
