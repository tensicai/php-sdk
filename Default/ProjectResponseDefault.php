<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ProjectResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ProjectResponseDefault\' not implemented yet.',
        );
    }
}
