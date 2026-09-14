<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ExampleProjectEntryDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ExampleProjectEntryDefault\' not implemented yet.',
        );
    }
}
