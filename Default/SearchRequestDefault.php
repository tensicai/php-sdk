<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait SearchRequestDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'SearchRequestDefault\' not implemented yet.',
        );
    }
}
