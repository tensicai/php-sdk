<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\AdminRoutineToggleRequest;

/**
 * @method static AdminRoutineToggleRequest fromArray(mixed[] $array)
 * @method static AdminRoutineToggleRequest fromRecordData(mixed[] $array)
 */
class AdminRoutineToggleRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return AdminRoutineToggleRequest::class;
    }
}
