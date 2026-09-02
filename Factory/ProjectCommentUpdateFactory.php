<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectCommentUpdate;

/**
 * @method static ProjectCommentUpdate fromArray(mixed[] $array)
 * @method static ProjectCommentUpdate fromRecordData(mixed[] $array)
 */
class ProjectCommentUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectCommentUpdate::class;
    }
}
