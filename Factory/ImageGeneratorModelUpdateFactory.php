<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ImageGeneratorModelUpdate;

/**
 * @method static ImageGeneratorModelUpdate fromArray(mixed[] $array)
 * @method static ImageGeneratorModelUpdate fromRecordData(mixed[] $array)
 */
class ImageGeneratorModelUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ImageGeneratorModelUpdate::class;
    }
}
