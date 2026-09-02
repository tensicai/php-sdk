<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectCustomToolsResponse;

/**
 * @method static ProjectCustomToolsResponse fromArray(mixed[] $array)
 * @method static ProjectCustomToolsResponse fromRecordData(mixed[] $array)
 */
class ProjectCustomToolsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectCustomToolsResponse::class;
    }
}
