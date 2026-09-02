<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\PageProjectCommentResponse;

/**
 * @method static PageProjectCommentResponse fromArray(mixed[] $array)
 * @method static PageProjectCommentResponse fromRecordData(mixed[] $array)
 */
class PageProjectCommentResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PageProjectCommentResponse::class;
    }
}
