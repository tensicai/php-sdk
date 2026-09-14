<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait SearchResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'SearchResponseDefault\' not implemented yet.',
        );
    }
}
