<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\OtelTestRequest;

/**
 * @method static OtelTestRequest fromArray(mixed[] $array)
 * @method static OtelTestRequest fromRecordData(mixed[] $array)
 */
class OtelTestRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OtelTestRequest::class;
    }
}
