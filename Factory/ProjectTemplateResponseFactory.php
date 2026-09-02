<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ProjectTemplateResponse;

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
