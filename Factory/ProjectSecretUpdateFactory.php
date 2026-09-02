<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectSecretUpdate;

/**
 * @method static ProjectSecretUpdate fromArray(mixed[] $array)
 * @method static ProjectSecretUpdate fromRecordData(mixed[] $array)
 */
class ProjectSecretUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectSecretUpdate::class;
    }
}
