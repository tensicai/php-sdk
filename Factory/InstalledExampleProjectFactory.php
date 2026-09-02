<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\InstalledExampleProject;

/**
 * @method static InstalledExampleProject fromArray(mixed[] $array)
 * @method static InstalledExampleProject fromRecordData(mixed[] $array)
 */
class InstalledExampleProjectFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return InstalledExampleProject::class;
    }
}
