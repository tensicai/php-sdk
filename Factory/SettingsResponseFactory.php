<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\SettingsResponse;

/**
 * @method static SettingsResponse fromArray(mixed[] $array)
 * @method static SettingsResponse fromRecordData(mixed[] $array)
 */
class SettingsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SettingsResponse::class;
    }
}
