<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait OpenAIEmbeddingUsageDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'OpenAIEmbeddingUsageDefault\' not implemented yet.',
        );
    }
}
