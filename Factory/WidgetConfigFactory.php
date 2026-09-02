<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\WidgetConfig;

/**
 * @method static WidgetConfig fromArray(mixed[] $array)
 * @method static WidgetConfig fromRecordData(mixed[] $array)
 */
class WidgetConfigFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return WidgetConfig::class;
    }
}
