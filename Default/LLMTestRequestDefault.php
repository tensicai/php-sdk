<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait LLMTestRequestDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'LLMTestRequestDefault\' not implemented yet.',
        );
    }
}
