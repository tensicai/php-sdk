<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait UsernameRequestDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'UsernameRequestDefault\' not implemented yet.',
        );
    }
}
