<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectHealthPoint;

/**
 * @method static ProjectHealthPoint fromArray(mixed[] $array)
 * @method static ProjectHealthPoint fromRecordData(mixed[] $array)
 */
class ProjectHealthPointFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectHealthPoint::class;
    }
}
