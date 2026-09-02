<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TeamProject;

/**
 * @method static TeamProject fromArray(mixed[] $array)
 * @method static TeamProject fromRecordData(mixed[] $array)
 */
class TeamProjectFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamProject::class;
    }
}
