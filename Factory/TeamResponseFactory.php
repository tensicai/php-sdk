<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TeamResponse;

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
