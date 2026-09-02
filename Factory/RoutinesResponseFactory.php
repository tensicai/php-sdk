<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\RoutinesResponse;

/**
 * @method static RoutinesResponse fromArray(mixed[] $array)
 * @method static RoutinesResponse fromRecordData(mixed[] $array)
 */
class RoutinesResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return RoutinesResponse::class;
    }
}
