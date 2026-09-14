<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait GuardEventsResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'GuardEventsResponseDefault\' not implemented yet.',
        );
    }
}
