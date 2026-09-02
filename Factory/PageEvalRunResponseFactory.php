<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\PageEvalRunResponse;

/**
 * @method static PageEvalRunResponse fromArray(mixed[] $array)
 * @method static PageEvalRunResponse fromRecordData(mixed[] $array)
 */
class PageEvalRunResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PageEvalRunResponse::class;
    }
}
