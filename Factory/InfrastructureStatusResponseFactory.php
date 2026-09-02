<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\InfrastructureStatusResponse;

/**
 * @method static InfrastructureStatusResponse fromArray(mixed[] $array)
 * @method static InfrastructureStatusResponse fromRecordData(mixed[] $array)
 */
class InfrastructureStatusResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return InfrastructureStatusResponse::class;
    }
}
