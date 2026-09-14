<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait InfrastructureFeatureStatusDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'InfrastructureFeatureStatusDefault\' not implemented yet.',
        );
    }
}
