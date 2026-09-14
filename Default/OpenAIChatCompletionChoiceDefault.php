<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait OpenAIChatCompletionChoiceDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'OpenAIChatCompletionChoiceDefault\' not implemented yet.',
        );
    }
}
