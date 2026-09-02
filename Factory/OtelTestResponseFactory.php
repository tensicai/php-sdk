<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OtelTestResponse;

/**
 * @method static OtelTestResponse fromArray(mixed[] $array)
 * @method static OtelTestResponse fromRecordData(mixed[] $array)
 */
class OtelTestResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OtelTestResponse::class;
    }
}
