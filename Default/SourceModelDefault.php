<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait SourceModelDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'SourceModelDefault\' not implemented yet.',
        );
    }
}
