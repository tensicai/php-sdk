<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait TeamsResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'TeamsResponseDefault\' not implemented yet.',
        );
    }
}
