<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait MessageResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'MessageResponseDefault\' not implemented yet.',
        );
    }
}
