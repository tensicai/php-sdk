<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectCommentCreate;

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
