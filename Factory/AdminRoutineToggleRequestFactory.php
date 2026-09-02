<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\AdminRoutineToggleRequest;

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
