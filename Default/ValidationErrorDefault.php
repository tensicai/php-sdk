<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ValidationErrorDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ValidationErrorDefault\' not implemented yet.',
        );
    }
}
