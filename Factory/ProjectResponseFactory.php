<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectResponse;

/**
 * @method static ProjectResponse fromArray(mixed[] $array)
 * @method static ProjectResponse fromRecordData(mixed[] $array)
 */
class ProjectResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectResponse::class;
    }
}
