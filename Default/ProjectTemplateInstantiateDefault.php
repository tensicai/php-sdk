<?php

declare(strict_types=1);

namespace TensicAI\SDK\Default;

use RuntimeException;

trait ProjectTemplateInstantiateDefault
{
    public static function default(): self
    {
        throw new RuntimeException(
            'Default object for \'ProjectTemplateInstantiateDefault\' not implemented yet.',
        );
    }
}
