<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ProjectHealthResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ProjectHealthResponseDefault\' not implemented yet.',
        );
    }
}
