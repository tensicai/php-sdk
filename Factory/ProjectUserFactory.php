<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectUser;

/**
 * @method static ProjectUser fromArray(mixed[] $array)
 * @method static ProjectUser fromRecordData(mixed[] $array)
 */
class ProjectUserFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectUser::class;
    }
}
