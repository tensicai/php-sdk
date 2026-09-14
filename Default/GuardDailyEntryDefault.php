<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait GuardDailyEntryDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'GuardDailyEntryDefault\' not implemented yet.',
        );
    }
}
