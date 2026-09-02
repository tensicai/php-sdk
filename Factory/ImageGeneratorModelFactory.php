<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ImageGeneratorModel;

/**
 * @method static ImageGeneratorModel fromArray(mixed[] $array)
 * @method static ImageGeneratorModel fromRecordData(mixed[] $array)
 */
class ImageGeneratorModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ImageGeneratorModel::class;
    }
}
