<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\EvalRunDetailResponse;

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
