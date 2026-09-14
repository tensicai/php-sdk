<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait TeamModelDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'TeamModelDefault\' not implemented yet.',
        );
    }
}
