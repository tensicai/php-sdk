<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait UserLoginDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'UserLoginDefault\' not implemented yet.',
        );
    }
}
