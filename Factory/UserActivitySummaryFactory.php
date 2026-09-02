<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\UserActivitySummary;

/**
 * @method static UserActivitySummary fromArray(mixed[] $array)
 * @method static UserActivitySummary fromRecordData(mixed[] $array)
 */
class UserActivitySummaryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserActivitySummary::class;
    }
}
