<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ProjectUserDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ProjectUserDefault\' not implemented yet.',
        );
    }
}
