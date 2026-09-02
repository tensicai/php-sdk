<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TeamModelUpdate;

/**
 * @method static TeamModelUpdate fromArray(mixed[] $array)
 * @method static TeamModelUpdate fromRecordData(mixed[] $array)
 */
class TeamModelUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamModelUpdate::class;
    }
}
