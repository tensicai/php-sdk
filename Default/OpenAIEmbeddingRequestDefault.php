<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait OpenAIEmbeddingRequestDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'OpenAIEmbeddingRequestDefault\' not implemented yet.',
        );
    }
}
