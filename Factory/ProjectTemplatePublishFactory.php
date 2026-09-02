<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectTemplatePublish;

/**
 * @method static ProjectTemplatePublish fromArray(mixed[] $array)
 * @method static ProjectTemplatePublish fromRecordData(mixed[] $array)
 */
class ProjectTemplatePublishFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectTemplatePublish::class;
    }
}
