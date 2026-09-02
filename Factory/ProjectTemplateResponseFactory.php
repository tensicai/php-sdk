<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ProjectTemplateResponse;

/**
 * @method static ProjectTemplateResponse fromArray(mixed[] $array)
 * @method static ProjectTemplateResponse fromRecordData(mixed[] $array)
 */
class ProjectTemplateResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ProjectTemplateResponse::class;
    }
}
