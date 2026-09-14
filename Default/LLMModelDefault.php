<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait LLMModelDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'LLMModelDefault\' not implemented yet.',
        );
    }
}
