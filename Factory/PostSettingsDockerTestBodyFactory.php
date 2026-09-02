<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\PostSettingsDockerTestBody;

/**
 * @method static PostSettingsDockerTestBody fromArray(mixed[] $array)
 * @method static PostSettingsDockerTestBody fromRecordData(mixed[] $array)
 */
class PostSettingsDockerTestBodyFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PostSettingsDockerTestBody::class;
    }
}
