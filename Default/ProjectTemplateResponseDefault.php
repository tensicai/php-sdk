<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ProjectTemplateResponseDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ProjectTemplateResponseDefault\' not implemented yet.',
        );
    }
}
