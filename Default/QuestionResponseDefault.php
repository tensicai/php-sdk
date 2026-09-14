<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait QuestionResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'QuestionResponseDefault\' not implemented yet.',
        );
    }
}
