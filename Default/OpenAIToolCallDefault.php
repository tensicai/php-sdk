<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait OpenAIToolCallDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'OpenAIToolCallDefault\' not implemented yet.',
        );
    }
}
