<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ClassifierRegistryCreateDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ClassifierRegistryCreateDefault\' not implemented yet.',
        );
    }
}
