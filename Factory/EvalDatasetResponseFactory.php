<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\EvalDatasetResponse;

/**
 * @method static EvalDatasetResponse fromArray(mixed[] $array)
 * @method static EvalDatasetResponse fromRecordData(mixed[] $array)
 */
class EvalDatasetResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EvalDatasetResponse::class;
    }
}
