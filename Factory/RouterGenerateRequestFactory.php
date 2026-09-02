<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\RouterGenerateRequest;

/**
 * @method static RouterGenerateRequest fromArray(mixed[] $array)
 * @method static RouterGenerateRequest fromRecordData(mixed[] $array)
 */
class RouterGenerateRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return RouterGenerateRequest::class;
    }
}
