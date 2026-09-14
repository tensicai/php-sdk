<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ApiKeyResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ApiKeyResponseDefault\' not implemented yet.',
        );
    }
}
