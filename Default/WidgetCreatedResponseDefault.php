<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait WidgetCreatedResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'WidgetCreatedResponseDefault\' not implemented yet.',
        );
    }
}
