<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\HealthCheckResponse;

/**
 * @method static HealthCheckResponse fromArray(mixed[] $array)
 * @method static HealthCheckResponse fromRecordData(mixed[] $array)
 */
class HealthCheckResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return HealthCheckResponse::class;
    }
}
