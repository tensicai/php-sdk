<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\RouterGenerateRequest;

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
