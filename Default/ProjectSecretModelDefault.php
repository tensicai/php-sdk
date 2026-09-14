<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ProjectSecretModelDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ProjectSecretModelDefault\' not implemented yet.',
        );
    }
}
