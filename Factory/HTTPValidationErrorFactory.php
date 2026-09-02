<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\HTTPValidationError;

/**
 * @method static HTTPValidationError fromArray(mixed[] $array)
 * @method static HTTPValidationError fromRecordData(mixed[] $array)
 */
class HTTPValidationErrorFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return HTTPValidationError::class;
    }
}
