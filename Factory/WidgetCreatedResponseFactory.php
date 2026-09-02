<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\WidgetCreatedResponse;

/**
 * @method static WidgetCreatedResponse fromArray(mixed[] $array)
 * @method static WidgetCreatedResponse fromRecordData(mixed[] $array)
 */
class WidgetCreatedResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return WidgetCreatedResponse::class;
    }
}
