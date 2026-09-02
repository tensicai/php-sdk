<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectCommentResponse;

/**
 * @method static ProjectCommentResponse fromArray(mixed[] $array)
 * @method static ProjectCommentResponse fromRecordData(mixed[] $array)
 */
class ProjectCommentResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectCommentResponse::class;
    }
}
