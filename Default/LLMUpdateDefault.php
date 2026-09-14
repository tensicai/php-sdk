<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait LLMUpdateDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'LLMUpdateDefault\' not implemented yet.',
        );
    }
}
