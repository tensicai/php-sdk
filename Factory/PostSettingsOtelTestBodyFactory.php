<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\PostSettingsOtelTestBody;

/**
 * @method static PostSettingsOtelTestBody fromArray(mixed[] $array)
 * @method static PostSettingsOtelTestBody fromRecordData(mixed[] $array)
 */
class PostSettingsOtelTestBodyFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PostSettingsOtelTestBody::class;
    }
}
