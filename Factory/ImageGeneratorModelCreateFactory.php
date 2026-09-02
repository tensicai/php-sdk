<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ImageGeneratorModelCreate;

/**
 * @method static ImageGeneratorModelCreate fromArray(mixed[] $array)
 * @method static ImageGeneratorModelCreate fromRecordData(mixed[] $array)
 */
class ImageGeneratorModelCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ImageGeneratorModelCreate::class;
    }
}
