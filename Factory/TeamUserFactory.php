<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TeamUser;

/**
 * @method static TeamUser fromArray(mixed[] $array)
 * @method static TeamUser fromRecordData(mixed[] $array)
 */
class TeamUserFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamUser::class;
    }
}
