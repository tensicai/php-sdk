<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectModelCreate;

/**
 * @method static ProjectModelCreate fromArray(mixed[] $array)
 * @method static ProjectModelCreate fromRecordData(mixed[] $array)
 */
class ProjectModelCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectModelCreate::class;
    }
}
