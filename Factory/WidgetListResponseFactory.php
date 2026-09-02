<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\WidgetListResponse;

/**
 * @method static WidgetListResponse fromArray(mixed[] $array)
 * @method static WidgetListResponse fromRecordData(mixed[] $array)
 */
class WidgetListResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return WidgetListResponse::class;
    }
}
