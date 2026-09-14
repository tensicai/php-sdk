<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait TextIngestModelDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'TextIngestModelDefault\' not implemented yet.',
        );
    }
}
