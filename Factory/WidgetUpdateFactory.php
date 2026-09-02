<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\WidgetUpdate;

/**
 * @method static WidgetUpdate fromArray(mixed[] $array)
 * @method static WidgetUpdate fromRecordData(mixed[] $array)
 */
class WidgetUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return WidgetUpdate::class;
    }
}
