<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait GetEmbeddingsQueryDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'GetEmbeddingsQueryDefault\' not implemented yet.',
        );
    }
}
