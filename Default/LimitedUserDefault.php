<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Default;

use RuntimeException;

trait LimitedUserDefault
{
    public static function default(): self
    {
        throw new RuntimeException('Default object for \'LimitedUserDefault\' not implemented yet.');
    }
}
