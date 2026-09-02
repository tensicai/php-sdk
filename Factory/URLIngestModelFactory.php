<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\URLIngestModel;

/**
 * @method static URLIngestModel fromArray(mixed[] $array)
 * @method static URLIngestModel fromRecordData(mixed[] $array)
 */
class URLIngestModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return URLIngestModel::class;
    }
}
