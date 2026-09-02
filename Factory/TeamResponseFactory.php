<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TeamResponse;

/**
 * @method static TeamResponse fromArray(mixed[] $array)
 * @method static TeamResponse fromRecordData(mixed[] $array)
 */
class TeamResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamResponse::class;
    }
}
