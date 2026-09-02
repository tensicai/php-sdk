<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TextIngestModel;

/**
 * @method static TextIngestModel fromArray(mixed[] $array)
 * @method static TextIngestModel fromRecordData(mixed[] $array)
 */
class TextIngestModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TextIngestModel::class;
    }
}
