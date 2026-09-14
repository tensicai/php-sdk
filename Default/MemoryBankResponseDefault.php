<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait MemoryBankResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'MemoryBankResponseDefault\' not implemented yet.',
        );
    }
}
