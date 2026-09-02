<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\WidgetCreate;

/**
 * @method static WidgetCreate fromArray(mixed[] $array)
 * @method static WidgetCreate fromRecordData(mixed[] $array)
 */
class WidgetCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return WidgetCreate::class;
    }
}
