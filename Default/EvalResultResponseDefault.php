<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait EvalResultResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'EvalResultResponseDefault\' not implemented yet.',
        );
    }
}
