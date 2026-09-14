<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait EvalRunResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'EvalRunResponseDefault\' not implemented yet.',
        );
    }
}
