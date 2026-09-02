<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetEmbeddingsQuery;

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
