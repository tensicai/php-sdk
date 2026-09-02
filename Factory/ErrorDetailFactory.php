<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ErrorDetail;

/**
 * @method static ErrorDetail fromArray(mixed[] $array)
 * @method static ErrorDetail fromRecordData(mixed[] $array)
 */
class ErrorDetailFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ErrorDetail::class;
    }
}
