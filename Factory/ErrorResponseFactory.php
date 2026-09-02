<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ErrorResponse;

/**
 * @method static ErrorResponse fromArray(mixed[] $array)
 * @method static ErrorResponse fromRecordData(mixed[] $array)
 */
class ErrorResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ErrorResponse::class;
    }
}
