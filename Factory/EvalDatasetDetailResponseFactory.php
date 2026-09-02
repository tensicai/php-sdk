<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\EvalDatasetDetailResponse;

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
