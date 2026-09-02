<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\PageEvalRunResponse;

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
