<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\HTTPValidationError;

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
