<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait SearchResultItemDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'SearchResultItemDefault\' not implemented yet.',
        );
    }
}
