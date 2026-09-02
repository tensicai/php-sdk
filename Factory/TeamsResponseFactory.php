<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TeamsResponse;

/**
 * @method static TeamsResponse fromArray(mixed[] $array)
 * @method static TeamsResponse fromRecordData(mixed[] $array)
 */
class TeamsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamsResponse::class;
    }
}
