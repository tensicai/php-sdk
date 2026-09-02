<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectCustomToolToggleResponse;

/**
 * @method static ProjectCustomToolToggleResponse fromArray(mixed[] $array)
 * @method static ProjectCustomToolToggleResponse fromRecordData(mixed[] $array)
 */
class ProjectCustomToolToggleResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectCustomToolToggleResponse::class;
    }
}
