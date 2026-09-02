<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GuardEventsResponse;

/**
 * @method static GuardEventsResponse fromArray(mixed[] $array)
 * @method static GuardEventsResponse fromRecordData(mixed[] $array)
 */
class GuardEventsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GuardEventsResponse::class;
    }
}
