<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ToolDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ToolDefault\' not implemented yet.',
        );
    }
}
