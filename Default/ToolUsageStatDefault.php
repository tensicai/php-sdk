<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ToolUsageStatDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ToolUsageStatDefault\' not implemented yet.',
        );
    }
}
