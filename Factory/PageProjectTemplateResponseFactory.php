<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\PageProjectTemplateResponse;

/**
 * @method static PageProjectTemplateResponse fromArray(mixed[] $array)
 * @method static PageProjectTemplateResponse fromRecordData(mixed[] $array)
 */
class PageProjectTemplateResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PageProjectTemplateResponse::class;
    }
}
