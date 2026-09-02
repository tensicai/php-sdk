<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TeamModel;

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
