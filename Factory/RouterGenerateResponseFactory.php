<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\RouterGenerateResponse;

/**
 * @method static RouterGenerateResponse fromArray(mixed[] $array)
 * @method static RouterGenerateResponse fromRecordData(mixed[] $array)
 */
class RouterGenerateResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return RouterGenerateResponse::class;
    }
}
