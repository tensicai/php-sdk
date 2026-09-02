<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectTemplateUpdate;

/**
 * @method static ProjectTemplateUpdate fromArray(mixed[] $array)
 * @method static ProjectTemplateUpdate fromRecordData(mixed[] $array)
 */
class ProjectTemplateUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectTemplateUpdate::class;
    }
}
