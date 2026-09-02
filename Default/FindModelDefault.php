<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Default;

use RuntimeException;

trait FindModelDefault
{
    public static function default(): self
    {
        throw new RuntimeException('Default object for \'FindModelDefault\' not implemented yet.');
    }
}
