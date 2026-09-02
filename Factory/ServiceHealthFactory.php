<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ServiceHealth;

/**
 * @method static ServiceHealth fromArray(mixed[] $array)
 * @method static ServiceHealth fromRecordData(mixed[] $array)
 */
class ServiceHealthFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ServiceHealth::class;
    }
}
