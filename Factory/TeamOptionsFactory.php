<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TeamOptions;

/**
 * @method static TeamOptions fromArray(mixed[] $array)
 * @method static TeamOptions fromRecordData(mixed[] $array)
 */
class TeamOptionsFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamOptions::class;
    }
}
