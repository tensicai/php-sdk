<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ImageModel;

/**
 * @method static ImageModel fromArray(mixed[] $array)
 * @method static ImageModel fromRecordData(mixed[] $array)
 */
class ImageModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ImageModel::class;
    }
}
