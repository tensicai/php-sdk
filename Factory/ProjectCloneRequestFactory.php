<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectCloneRequest;

/**
 * @method static ProjectCloneRequest fromArray(mixed[] $array)
 * @method static ProjectCloneRequest fromRecordData(mixed[] $array)
 */
class ProjectCloneRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectCloneRequest::class;
    }
}
