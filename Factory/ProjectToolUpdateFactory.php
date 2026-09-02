<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectToolUpdate;

/**
 * @method static ProjectToolUpdate fromArray(mixed[] $array)
 * @method static ProjectToolUpdate fromRecordData(mixed[] $array)
 */
class ProjectToolUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectToolUpdate::class;
    }
}
