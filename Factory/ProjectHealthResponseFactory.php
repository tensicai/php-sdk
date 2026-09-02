<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectHealthResponse;

/**
 * @method static ProjectHealthResponse fromArray(mixed[] $array)
 * @method static ProjectHealthResponse fromRecordData(mixed[] $array)
 */
class ProjectHealthResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectHealthResponse::class;
    }
}
