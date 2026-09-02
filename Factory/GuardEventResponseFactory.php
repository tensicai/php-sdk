<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GuardEventResponse;

/**
 * @method static GuardEventResponse fromArray(mixed[] $array)
 * @method static GuardEventResponse fromRecordData(mixed[] $array)
 */
class GuardEventResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GuardEventResponse::class;
    }
}
