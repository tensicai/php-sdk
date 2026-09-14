<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait SyncSourceDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'SyncSourceDefault\' not implemented yet.',
        );
    }
}
