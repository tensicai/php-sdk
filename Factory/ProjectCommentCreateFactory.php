<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectCommentCreate;

/**
 * @method static ProjectCommentCreate fromArray(mixed[] $array)
 * @method static ProjectCommentCreate fromRecordData(mixed[] $array)
 */
class ProjectCommentCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectCommentCreate::class;
    }
}
