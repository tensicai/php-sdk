<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TeamModel;

/**
 * @method static TeamModel fromArray(mixed[] $array)
 * @method static TeamModel fromRecordData(mixed[] $array)
 */
class TeamModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamModel::class;
    }
}
