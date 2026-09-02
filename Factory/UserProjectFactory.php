<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\UserProject;

/**
 * @method static UserProject fromArray(mixed[] $array)
 * @method static UserProject fromRecordData(mixed[] $array)
 */
class UserProjectFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserProject::class;
    }
}
