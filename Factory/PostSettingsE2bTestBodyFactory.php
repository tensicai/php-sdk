<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\PostSettingsE2bTestBody;

/**
 * @method static PostSettingsE2bTestBody fromArray(mixed[] $array)
 * @method static PostSettingsE2bTestBody fromRecordData(mixed[] $array)
 */
class PostSettingsE2bTestBodyFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PostSettingsE2bTestBody::class;
    }
}
