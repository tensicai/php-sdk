<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\FunctionCall;

/**
 * @method static FunctionCall fromArray(mixed[] $array)
 * @method static FunctionCall fromRecordData(mixed[] $array)
 */
class FunctionCallFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return FunctionCall::class;
    }
}
