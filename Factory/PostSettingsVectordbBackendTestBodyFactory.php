<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\PostSettingsVectordbBackendTestBody;

/**
 * @method static PostSettingsVectordbBackendTestBody fromArray(mixed[] $array)
 * @method static PostSettingsVectordbBackendTestBody fromRecordData(mixed[] $array)
 */
class PostSettingsVectordbBackendTestBodyFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PostSettingsVectordbBackendTestBody::class;
    }
}
