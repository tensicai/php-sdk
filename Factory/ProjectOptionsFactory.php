<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectOptions;

/**
 * @method static ProjectOptions fromArray(mixed[] $array)
 * @method static ProjectOptions fromRecordData(mixed[] $array)
 */
class ProjectOptionsFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectOptions::class;
    }
}
