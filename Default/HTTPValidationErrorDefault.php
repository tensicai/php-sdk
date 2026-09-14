<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait HTTPValidationErrorDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'HTTPValidationErrorDefault\' not implemented yet.',
        );
    }
}
