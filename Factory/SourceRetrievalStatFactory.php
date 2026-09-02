<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\SourceRetrievalStat;

/**
 * @method static SourceRetrievalStat fromArray(mixed[] $array)
 * @method static SourceRetrievalStat fromRecordData(mixed[] $array)
 */
class SourceRetrievalStatFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SourceRetrievalStat::class;
    }
}
