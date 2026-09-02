<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\CommentCreatedResponse;

/**
 * @method static CommentCreatedResponse fromArray(mixed[] $array)
 * @method static CommentCreatedResponse fromRecordData(mixed[] $array)
 */
class CommentCreatedResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return CommentCreatedResponse::class;
    }
}
