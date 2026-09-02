<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\WidgetResponse;

/**
 * @method static WidgetResponse fromArray(mixed[] $array)
 * @method static WidgetResponse fromRecordData(mixed[] $array)
 */
class WidgetResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return WidgetResponse::class;
    }
}
