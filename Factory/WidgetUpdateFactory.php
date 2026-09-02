<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\WidgetUpdate;

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
