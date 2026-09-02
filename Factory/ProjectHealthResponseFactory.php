<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectHealthResponse;

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
