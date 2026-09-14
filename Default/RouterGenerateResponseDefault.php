<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait RouterGenerateResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'RouterGenerateResponseDefault\' not implemented yet.',
        );
    }
}
