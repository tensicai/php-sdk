<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\SearchRequest;

/**
 * @method static SearchRequest fromArray(mixed[] $array)
 * @method static SearchRequest fromRecordData(mixed[] $array)
 */
class SearchRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SearchRequest::class;
    }
}
