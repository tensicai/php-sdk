<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\EvalResultResponse;

/**
 * @method static EvalResultResponse fromArray(mixed[] $array)
 * @method static EvalResultResponse fromRecordData(mixed[] $array)
 */
class EvalResultResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EvalResultResponse::class;
    }
}
