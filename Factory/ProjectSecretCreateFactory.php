<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectSecretCreate;

/**
 * @method static ProjectSecretCreate fromArray(mixed[] $array)
 * @method static ProjectSecretCreate fromRecordData(mixed[] $array)
 */
class ProjectSecretCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectSecretCreate::class;
    }
}
