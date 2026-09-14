<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait TeamLLMDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'TeamLLMDefault\' not implemented yet.',
        );
    }
}
