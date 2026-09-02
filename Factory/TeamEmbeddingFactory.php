<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TeamEmbedding;

/**
 * @method static TeamEmbedding fromArray(mixed[] $array)
 * @method static TeamEmbedding fromRecordData(mixed[] $array)
 */
class TeamEmbeddingFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamEmbedding::class;
    }
}
