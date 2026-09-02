<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\IngestResponse;

/**
 * @method static IngestResponse fromArray(mixed[] $array)
 * @method static IngestResponse fromRecordData(mixed[] $array)
 */
class IngestResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return IngestResponse::class;
    }
}
