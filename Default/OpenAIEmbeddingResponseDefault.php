<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Default;

use RuntimeException;

trait OpenAIEmbeddingResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException('Default object for \'OpenAIEmbeddingResponseDefault\' not implemented yet.');
    }
}
