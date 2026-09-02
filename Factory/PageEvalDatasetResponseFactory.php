<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\PageEvalDatasetResponse;

/**
 * @method static PageEvalDatasetResponse fromArray(mixed[] $array)
 * @method static PageEvalDatasetResponse fromRecordData(mixed[] $array)
 */
class PageEvalDatasetResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PageEvalDatasetResponse::class;
    }
}
