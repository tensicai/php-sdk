<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\EvalDatasetDetailResponse;

/**
 * @method static EvalDatasetDetailResponse fromArray(mixed[] $array)
 * @method static EvalDatasetDetailResponse fromRecordData(mixed[] $array)
 */
class EvalDatasetDetailResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EvalDatasetDetailResponse::class;
    }
}
