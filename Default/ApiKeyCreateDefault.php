<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ApiKeyCreateDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ApiKeyCreateDefault\' not implemented yet.',
        );
    }
}
