<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectToolUpdate;

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
