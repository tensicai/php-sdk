<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait UserCreateDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'UserCreateDefault\' not implemented yet.',
        );
    }
}
