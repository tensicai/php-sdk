<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\UserActivityProject;

/**
 * @method static UserActivityProject fromArray(mixed[] $array)
 * @method static UserActivityProject fromRecordData(mixed[] $array)
 */
class UserActivityProjectFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserActivityProject::class;
    }
}
