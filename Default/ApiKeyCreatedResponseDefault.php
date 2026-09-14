<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ApiKeyCreatedResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ApiKeyCreatedResponseDefault\' not implemented yet.',
        );
    }
}
