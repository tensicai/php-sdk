<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ClassifierRegistryUpdateDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ClassifierRegistryUpdateDefault\' not implemented yet.',
        );
    }
}
