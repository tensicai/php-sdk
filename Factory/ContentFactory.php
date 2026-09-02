<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\Content;

/**
 * @method static Content fromArray(mixed[] $array)
 * @method static Content fromRecordData(mixed[] $array)
 */
class ContentFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Content::class;
    }
}
