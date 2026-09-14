<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait EmbeddingUpdateDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'EmbeddingUpdateDefault\' not implemented yet.',
        );
    }
}
