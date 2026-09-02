<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\SearchResponse;

/**
 * @method static SearchResponse fromArray(mixed[] $array)
 * @method static SearchResponse fromRecordData(mixed[] $array)
 */
class SearchResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SearchResponse::class;
    }
}
