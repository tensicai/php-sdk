<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ValidationError;

/**
 * @method static ValidationError fromArray(mixed[] $array)
 * @method static ValidationError fromRecordData(mixed[] $array)
 */
class ValidationErrorFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ValidationError::class;
    }
}
