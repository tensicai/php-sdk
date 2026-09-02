<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectsResponse;

/**
 * @method static ProjectsResponse fromArray(mixed[] $array)
 * @method static ProjectsResponse fromRecordData(mixed[] $array)
 */
class ProjectsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectsResponse::class;
    }
}
