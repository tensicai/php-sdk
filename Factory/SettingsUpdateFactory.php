<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\SettingsUpdate;

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
