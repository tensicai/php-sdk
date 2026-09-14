<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait NewsResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'NewsResponseDefault\' not implemented yet.',
        );
    }
}
