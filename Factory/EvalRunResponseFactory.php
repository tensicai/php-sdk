<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\EvalRunResponse;

/**
 * @method static EvalRunResponse fromArray(mixed[] $array)
 * @method static EvalRunResponse fromRecordData(mixed[] $array)
 */
class EvalRunResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EvalRunResponse::class;
    }
}
