<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetEmbeddingsQuery;

/**
 * @method static GetEmbeddingsQuery fromArray(mixed[] $array)
 * @method static GetEmbeddingsQuery fromRecordData(mixed[] $array)
 */
class GetEmbeddingsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetEmbeddingsQuery::class;
    }
}
