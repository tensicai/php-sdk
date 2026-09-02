<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\PostSettingsDoclingTestBody;

/**
 * @method static PostSettingsDoclingTestBody fromArray(mixed[] $array)
 * @method static PostSettingsDoclingTestBody fromRecordData(mixed[] $array)
 */
class PostSettingsDoclingTestBodyFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PostSettingsDoclingTestBody::class;
    }
}
