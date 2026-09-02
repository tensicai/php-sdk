<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectTemplateInstantiate;

/**
 * @method static ProjectTemplateInstantiate fromArray(mixed[] $array)
 * @method static ProjectTemplateInstantiate fromRecordData(mixed[] $array)
 */
class ProjectTemplateInstantiateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectTemplateInstantiate::class;
    }
}
