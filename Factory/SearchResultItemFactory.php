<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\SearchResultItem;

/**
 * @method static SearchResultItem fromArray(mixed[] $array)
 * @method static SearchResultItem fromRecordData(mixed[] $array)
 */
class SearchResultItemFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SearchResultItem::class;
    }
}
