<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectSecretModel;

/**
 * @method static ProjectSecretModel fromArray(mixed[] $array)
 * @method static ProjectSecretModel fromRecordData(mixed[] $array)
 */
class ProjectSecretModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectSecretModel::class;
    }
}
