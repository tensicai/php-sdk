<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\EvalRunDetailResponse;

/**
 * @method static EvalRunDetailResponse fromArray(mixed[] $array)
 * @method static EvalRunDetailResponse fromRecordData(mixed[] $array)
 */
class EvalRunDetailResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EvalRunDetailResponse::class;
    }
}
