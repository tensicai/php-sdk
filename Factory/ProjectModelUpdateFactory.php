<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectModelUpdate;

/**
 * @method static ProjectModelUpdate fromArray(mixed[] $array)
 * @method static ProjectModelUpdate fromRecordData(mixed[] $array)
 */
class ProjectModelUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectModelUpdate::class;
    }
}
