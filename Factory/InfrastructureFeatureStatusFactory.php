<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\InfrastructureFeatureStatus;

/**
 * @method static InfrastructureFeatureStatus fromArray(mixed[] $array)
 * @method static InfrastructureFeatureStatus fromRecordData(mixed[] $array)
 */
class InfrastructureFeatureStatusFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return InfrastructureFeatureStatus::class;
    }
}
