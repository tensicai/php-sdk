<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\SettingsUpdate;

/**
 * @method static SettingsUpdate fromArray(mixed[] $array)
 * @method static SettingsUpdate fromRecordData(mixed[] $array)
 */
class SettingsUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SettingsUpdate::class;
    }
}
