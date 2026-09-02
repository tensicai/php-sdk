<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\SourceModel;

/**
 * @method static SourceModel fromArray(mixed[] $array)
 * @method static SourceModel fromRecordData(mixed[] $array)
 */
class SourceModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SourceModel::class;
    }
}
