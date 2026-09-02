<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\SyncSource;

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
