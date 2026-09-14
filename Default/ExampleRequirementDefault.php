<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ExampleRequirementDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ExampleRequirementDefault\' not implemented yet.',
        );
    }
}
