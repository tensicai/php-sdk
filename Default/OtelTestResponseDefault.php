<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Default;

use RuntimeException;

trait OtelTestResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException('Default object for \'OtelTestResponseDefault\' not implemented yet.');
    }
}
