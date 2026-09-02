<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ClassifierResponse;

/**
 * @method static ClassifierResponse fromArray(mixed[] $array)
 * @method static ClassifierResponse fromRecordData(mixed[] $array)
 */
class ClassifierResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ClassifierResponse::class;
    }
}
