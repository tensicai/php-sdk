<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TeamModelCreate;

/**
 * @method static TeamModelCreate fromArray(mixed[] $array)
 * @method static TeamModelCreate fromRecordData(mixed[] $array)
 */
class TeamModelCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamModelCreate::class;
    }
}
