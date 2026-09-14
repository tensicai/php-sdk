<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ContentDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ContentDefault\' not implemented yet.',
        );
    }
}
