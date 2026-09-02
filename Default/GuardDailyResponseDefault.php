<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Default;

use RuntimeException;

trait GuardDailyResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException('Default object for \'GuardDailyResponseDefault\' not implemented yet.');
    }
}
