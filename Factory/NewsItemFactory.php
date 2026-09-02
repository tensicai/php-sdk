<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\NewsItem;

/**
 * @method static NewsItem fromArray(mixed[] $array)
 * @method static NewsItem fromRecordData(mixed[] $array)
 */
class NewsItemFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return NewsItem::class;
    }
}
