<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\LocationInner;

/**
 * @method static LocationInner fromArray(mixed[] $array)
 * @method static LocationInner fromRecordData(mixed[] $array)
 */
class LocationInnerFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return LocationInner::class;
    }
}
